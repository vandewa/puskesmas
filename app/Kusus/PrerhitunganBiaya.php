<?php
namespace App\Kusus;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalRuang;
use App\Models\His\TrxMedicalSettlement;
use App\Models\His\TrxMedicalSettlementInv;
use App\Models\His\TrxMedicalSettlementShare;
use App\Models\His\TrxMedicalTindakan;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxTarifGeneral;
use App\Models\His\TrxTarifKelas;
use App\Models\His\TrxTarifParamedis;
use App\Models\His\TrxTarifTindakan;
use App\Models\His\TrxTarifUnitmedis;
use App\Models\His\TrxUnitMedis;

class PrerhitunganBiaya
{
    protected $dataMedical;

    // fungsi utama
    // bekerja dengan mengambil fungsi2 lain
    // di konversi dari store procedure kedalam php
    // perhatikan antar column '' dan column null beisa berbeda hasil
    public function hitungBiaya($medicalcd) {

        $this->dataMedical = TrxMedical::with(['pasien' => function($a) {
          $a->with(['asuransi']);
        },'ruang' ])->first();

        $this->deletePerhitungan($medicalcd); // clear semua data
        $this->hitungTarifGeneral($this->dataMedical->medical_tp); // masukkan tarif otomatis
        $this->hitungTarifTindakan($medicalcd); // biaya dari tindakan yang dilakukan
        $this->hitungTarifUnitMedis($medicalcd); // biaya dari lab
        $this->hitungRawatInap($medicalcd);

        // kusus puskesmas reset semua biaya ke 0  karena sudah ikut paket ruangan
        if($this->dataMedical->medical_tp == 'MEDICAL_TP_02'){

            TrxMedicalSettlement::where('medical_cd', $medicalcd)
            ->where('tarif_tp', '<>', 'TARIF_TP_03')->update([

                // 'item_price' => 0,
                // 'amount' => 0
            ]);
        }


    }

    // hitung rawat inap versi puskesmas
    // puskesmas cuma satu kelas dan harganya paket
    // semua harga akan paket senilai 300rb per hari
    protected function hitungRawatInap($medicalcd)
    {
        $data = TrxMedicalRuang::where('medical_cd', $medicalcd)
        ->where('datetime_end', null)
        ->first();
            // belum di tambahakan sesuai asuransinya
        if($data){
            $cekTarif = TrxTarifKelas::where('kelas_cd', $data->kelas_cd)->first();
            // hitung hari
            $date1=date_create(date('Y-m-d', strtotime($data->datetime_start)));
            $date2=date_create($data->datetime_end??date('Y-m-d'));
            $hariTerakhir = $data->datetime_end??date('Y-m-d');
            $jumlahHari = date_diff($date1,$date2);
            $jumlahHari = $jumlahHari->format("%a%");
            if($jumlahHari < 1) {
                $jumlahHari = 1;
            }

            TrxMedicalSettlement::create([
                'medical_cd' => $this->dataMedical->medical_cd,
                'tarif_tp' => 'TARIF_TP_03', // merupakan jenis tarif tp kelas (akomodasi)
                'account_cd' => $cekTarif->account_cd,
                'datetime_trx' => $data->created_at,
                'data_cd' => $cekTarif->seq_no,
                'data_nm' =>  'Akomodasi tanggal '.date('Y-m-d', strtotime($data->datetime_start)).' S/D '.$hariTerakhir.'  @Total '.$jumlahHari.' hari',
                'amount' => $this->getTarif('TARIF_TP_03', $cekTarif->seq_no, $this->dataMedical->ruang->kelas_cd??"",  $this->dataMedical->pasien->asuransi->insurance_cd ??"", $this->dataMedical->medical_to) *  $jumlahHari,
                'note' => '',
                'manual_st' => '0',
                'payment_st' => 'PAYMENT_ST_0',
                'quantity' =>  $jumlahHari,
                'item_price' =>  $cekTarif->tarif,

            ]);

            // masukkan ke model perhitungan


        }
    }

    // tambahkan data2 yang auto di tambahkan ke model perhitunan
    // misalkan biaya administrasi
    protected function autoAddData() {

    }

    // hapus semua data sebelum dihitung ulang
    protected function deletePerhitungan ($medicalcd) {

        // smulai hapus data perhitungan yang tidak terpakai
        TrxMedicalSettlement::where('medical_cd',$medicalcd)->where('payment_st', 'PAYMENT_ST_0')
        ->where('manual_st', '0')->where('invoice_no', null)->delete();

        // hapus dari settlemen inv ( hapus obat dan bhp)
        TrxMedicalSettlementInv::where('medical_cd',$medicalcd)->where('payment_st', 'PAYMENT_ST_0')
        ->where('manual_st', '0')->where('invoice_no', null)->delete();

        // hapus dari settlemen share

        TrxMedicalSettlementShare::where('medical_cd', $medicalcd);

    }


    // ambil nilai tarif disini berdasarkan jensi rawat dan jenis tarif
    // memungkinkan untuk multiple tarif berdasarkan kelas dan asuransi
    // selalu perhatikan kelas nya
    public function getTarif($tarifTp, $datacd, $kelascd='', $insurancecd='', $medicaltp) {
        switch ($tarifTp) {
            case 'TARIF_TP_00':
                $data = TrxTarifGeneral::where('kelas_cd', $kelascd)->where('insurance_cd', $insurancecd)
                ->where(function($a)use($medicaltp){
                    $a->where('medical_tp', '')->orWhere('medical_tp', null)->orWwhere('medical_tp',$medicaltp);
                });
                return $data->tarif;
            break;
            case "TARIF_TP_01":
                $data = TrxTarifParamedis::where('paramedis_tp', 'PARAMEDIS_TP_01')
                ->where('kelas_cd', $kelascd)
                ->where('insurance_cd', $insurancecd)->first();
                return $data->tarif;
                break;
            case "TARIF_TP_02": // merupakan tarif unit medis yaitu lab, dan radiologi, bisa juga bank darah
                $data = TrxUnitMedis::where('medicalunit_cd', $datacd)->where('kelas_cd', $kelascd)->where('insurance_cd', $insurancecd)->first();
                return $data->tarif;
                break;
            case "TARIF_TP_03": // merupakan tarif kelas (tarif ruangan yang di pakai)
                $data = TrxTarifKelas::where('kelas_cd', $kelascd)->where(function($a)use($kelascd, $insurancecd) {
                    $a->where('insurance_cd', $insurancecd)->orWhere('insurance_cd', '')->orWhere('insurance_cd', null);
                })->first();
                return $data->tarif;
                break;
            case "TARIF_TP_04": // merupakan tarif kelas (tarif ruangan yang di pakai)
                $data = TrxTarifTindakan::where('treatment_cd', $datacd)->where(function($a)use($kelascd, $insurancecd) {
                    $a->where('kelas_cd', $kelascd)->orwhere('insurance_cd', $insurancecd)->orWhere('insurance_cd', '')->orWhere('insurance_cd', null);
                })->first();
                return $data->tarif;
                break;
            default:
              return 0;
            }

    }
    /*--
        TARIF PARAMEDIS
        hitung tarif nya paramedis
        tidak dipakai dipuskesmas
        --*/
    protected function hitungTarifParamedis()
    {

    }



    // digunakan untuk menghitung biaya lab dan radiologi
    protected function hitungTarifUnitMedis($medicalcd) {
        $data = TrxMedicalUnit::with(['tindakan'])->where('medical_cd', $medicalcd)->where(function($a){
            $a->where('payment_st', '<>', 'PAYMENT_ST_1')->orwhere('payment_st', null);
        })
        ->orderBy('datetime_trx', 'asc')->get();

        // dd($data);


        foreach($data as $item) {

            $ambilAccount = TrxTarifUnitmedis::where('medicalunit_cd', $item->medicalunit_cd)
            ->where('kelas_cd', $this->dataMedical->ruang->kelas_cd ??'')
            ->where('insurance_cd', $this->dataMedical->pasien->asuransi->insurance_cd ??'')
            ->first();
            if(!$ambilAccount){
                $ambilAccount = TrxTarifUnitmedis::where('medicalunit_cd', $item->medicalunit_cd)
                ->first();
            }
            // dd($ambilAccount);
            if($ambilAccount) {
                TrxMedicalSettlement::create([
                    'medical_cd' => $medicalcd,
                    'tarif_tp' => 'TARIF_TP_02', // merupakan jenis tarif tp general
                    'account_cd' => $ambilAccount->account_cd,
                    'datetime_trx' => $item->created_at,
                    'data_cd' => $item->seq_no,
                    'data_nm' =>  $item->tindakan->medicalunit_nm??"",
                    'amount' => $ambilAccount->tarif,
                    'note' => '',
                    'manual_st' => '0',
                    'payment_st' => 'PAYMENT_ST_0',
                    'quantity' => 1,
                    'item_price' =>  $ambilAccount->tarif,

                ]);
            }


        }


    }

    // hitung biaya dari setiap tindakan yang dilakukan
    protected function hitungTarifTindakan ($medicalcd) {

        $data = TrxMedicalTindakan::with(['tindakan'])->where('medical_cd', $medicalcd)
        ->where(function($a){
            $a->where('payment_st', '<>', 'PAYMENT_ST_1')->orwhere('payment_st', null);
        })->get();



        foreach($data as $item) {
            $cektaritindakan = TrxTarifTindakan::where('treatment_cd', $item->treatment_cd)->first();
            // dd( $cektaritindakan );
            if($cektaritindakan) {
                TrxMedicalSettlement::create([
                    'medical_cd' => $this->dataMedical->medical_cd,
                    'tarif_tp' => 'TARIF_TP_00', // merupakan jenis tarif tp general
                    'account_cd' => $cektaritindakan->account_cd,
                    'datetime_trx' => $item->datetime_trx,
                    'data_nm' =>  $item->tindakan->treatment_nm,
                    'amount' => $cektaritindakan->tarif,
                    'note' => '',
                    'manual_st' => '0',
                    'payment_st' => 'PAYMENT_ST_0',
                    'quantity' => 1,
                    'item_price' =>  $cektaritindakan->tarif,

                ]);
            }
        }
    }
    // mulai hitung tarif general jika ada
    protected function hitungTarifGeneral($medicalTp) {

        $v_strKelasCdTemp = '';
        $v_strAsuransiCdTemp = '';
        $datetimein = now();
        $cekTarifgeneral = TrxTarifGeneral::where('auto_add', '1')
        ->where('kelas_cd' , $this->dataMedical->ruang->kelas_cd??"")->where('insurance_cd', $this->dataMedical->pasien->asuransi->insurance_cd ??"")
        ->where(function($a) use($medicalTp){
            $a->where('medical_tp' , '')->orWhere('medical_tp',null)->orwhere('medical_tp', $medicalTp);
        })->first();

        // jika ditemukan tarif general
        if($cekTarifgeneral){
          $v_strKelasCdTemp =  $this->dataMedical->ruang->kelas_cd??"";
          $v_strAsuransiCdTemp =$this->dataMedical->pasien->asuransi->insurance_cd??"";
        }

        $data = TrxTarifGeneral::where('auto_add', '1')
        ->where('kelas_cd', $v_strKelasCdTemp)->where('insurance_cd', $v_strAsuransiCdTemp)
        ->where(function($a) use($medicalTp){
            $a->where('medical_tp' , '')->orWhere('medical_tp',null)->orwhere('medical_tp', $medicalTp);
        })->orderBy('seq_no', 'asc')->get();

        foreach($data as $item) {
            if($data->medical_tp == 'MEDICAL_TP_01') {
                $datetimein = $this->dataMedical->datetime_in;
            }

            TrxMedicalSettlement::create([
                'medical_cd' => $this->dataMedical->medical_cd,
                'tarif_tp' => 'TARIF_TP_00', // merupakan jenis tarif tp general
                'account_cd' => $item->account_cd,
                'datetime_trx' => $datetimein,
                'data_cd' => $item->seq_no,
                'data_nm' =>  $item->tarif_nm,
                'amount' => $item->tarif,
                'note' => '',
                'manual_st' => '0',
                'payment_st' => 'PAYMENT_ST_0',
                'quantity' => 1,
                'item_price' =>  $item->tarif,

            ]);

        }

    }



}
