<?php

namespace App\Livewire\Pages\Registrasi;

use Livewire\Component;
use App\Models\His\TrxIcd;
use Livewire\Attributes\On;
use App\Models\His\TrxKamar;
use App\Models\His\TrxKelas;
use App\Models\His\TrxQueue;
use App\Models\His\TrxRuang;
use Livewire\WithPagination;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxPasien;
use App\Models\His\TrxMedical;
use App\Livewire\Pages\Pasien\ListPasien;


class RawatInap extends Component
{

    use WithPagination;

    public $pasien, $diagnosa, $alasan, $jenisPasien, $kelas, $ruang, $medicalcd, $pulang;
    public $form = [
        "pasien_cd" => null,
        "medical_cd" => null,
        "dr_cd" => 'TIMDOKTER',
        "datetime_in" => null,
        "medical_tp" => 'MEDICAL_TP_02',
        "medical_trx_st" => 'MEDICAL_TRX_ST_0',
        "medunit_cd" => null,
        "queue_no" => null,
        "pasien_tp" => null,
        'jadwal_seqno' => null,
        'ruang_cd' => null,
        "visit_tp" => 'VISIT_TP_00',
        "pulang_st" => null,
    ];

    public $ruangan = [
        'ruang_cd' => null,
        'datetime_start' => null,
        'kelas_cd' => null,
    ];

    public $medicalRecord = [
        // "pasien_cd" => null,
        "icd_cd" => null,
        "datetime_record" => null,
        "rm_tp" => "RM_TP_3",
        "medical_note" => null,
        "dr_cd" => null,
    ];
    public $searchRm, $searchPasien, $searchAlamat, $searchTanggal;

    public function mount($id = '', $medicalcd = '')
    {
        $this->medicalcd = $medicalcd;
        $this->alasan = get_code('VISIT_TP');
        $this->jenisPasien = get_code('PASIEN_TP');
        $this->kelas = TrxKelas::all()->toArray();
        $this->ruang = TrxKamar::all()->toArray();
        $this->pulang = get_code('OUT_TP');
        if ($id != "") {
            $this->pilihOrang($id);
        }

    }


    #[On('pilih-orang')]
    public function pilihOrang($id = "")
    {

        $this->pasien = TrxPasien::findorfail($id);
        $this->form['pasien_tp'] = $this->pasien->pasien_tp;
        $this->form['pasien_cd'] = $this->pasien->pasien_cd;

    }

    #[On('pilih-diagnosa')]
    public function pilihDiagnosa($id = "")
    {
        $this->diagnosa = TrxIcd::find($id);
    }

    public function pilih($id)
    {
        if (!$this->pasien) {
            $this->js("Swal.fire(
                'Oops!',
                'Mohon Pilih Pasien terlebih dahulu!',
                'error'
              )");

            return;
        }

        // masukkan unsur ruangan
        $jadwal = TrxRuang::find($id);

        $this->ruangan['ruang_cd'] = $id;
        $this->form['ruang_cd'] = $id;
        $this->ruangan['datetime_start'] = now();
        $this->ruangan['kelas_cd'] = $jadwal->kelas_cd;

        $ceking = TrxMedical::where('medunit_cd', $jadwal->medunit_cd)
            ->where('pasien_cd', $this->pasien->pasien_cd)
            ->where('medical_trx_st', 'MEDICAL_TRX_ST_0');

        // cek sudah terdaftar di rawat inap
        if ($ceking->where('medical_tp', 'MEDICAL_TP_02')->first()) {
            $this->js("Swal.fire(
                'Oops!',
                'Pasien sudah terdaftar di rawat inap',
                'error'
              )");
            return;
        }

        $this->form['jadwal_seqno'] = $id;

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan mendaftarkan pasien?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.save()
            }
        })
        JS);
    }

    public function generateAntrian()
    {
        // generate no amtrian
        $noTertinggi = 0;
        //cek keberadaan apointment
        $maxappointment = TrxQueue::where('jadwal_seqno', $this->form['jadwal_seqno'])
            ->whereDate('datetime_trx', date('Y-m-d'))->orderBy("seq_no", 'desc')
            ->first();
        if ($maxappointment) {
            $noTertinggi = $maxappointment->queue_no;
        }
        //cek yang di medical
        $maxappointment = TrxMedical::where('jadwal_seqno', $this->form['jadwal_seqno'])
            ->whereDate('datetime_in', date('Y-m-d'))->orderBy("created_at", 'desc')
            ->first();
        if ($maxappointment) {
            if ($noTertinggi < $maxappointment->queue_no) {
                $noTertinggi = $maxappointment->queue_no;
            }
        }
        $noTertinggi = $noTertinggi + 1;

        return $noTertinggi;

    }

    public function save()
    {
        if ($this->medicalcd) {
            $this->form['medical_root_cd'] = $this->medicalcd;
            TrxMedical::find($this->medicalcd)->update([
                'medical_trx_st' => 'MEDICAL_TRX_ST_2'
            ]);
        }
        $this->form['medical_cd'] = gen_medical_cd();
        $this->form['datetime_in'] = now();
        $rm = TrxMedical::create(
            $this->form
        );

        $rm->ruanganInap()->create($this->ruangan);

        // simpan ke trx_ruang


        if ($this->medicalRecord['icd_cd'] != "") {
            $rm->medicalRecord()->create($this->medicalRecord);
        }

        // ubah jadi terisi

        TrxRuang::where('ruang_cd',  $this->form['ruang_cd'])->update([
            'kondisi_st' => 'KONDISI_ST_01'
        ]);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Pendaftaran berhasil!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Kembali Ke list pasien',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.kembalii()
            }
          })
        JS);
    }

    public function kembalii()
    {
        $this->redirect(ListPasien::class);
    }


    public function render()
    {
        $data = TrxRuang::with(['bangsal', 'kamar', 'kelas'])
        ->where('kondisi_st', 'KONDISI_ST_02')
        // ->whereNotIn('ruang_cd',
        //     TrxMedical::where('medical_tp', 'MEDICAL_TP_02')
        //         ->where('medical_trx_st', 'MEDICAL_TRX_ST_0')
        //         ->get()??[])
            ->orderBy('kelas_cd', 'asc')->get();

        return view('livewire.pages.registrasi.rawat-inap', [
            'posts' => $data
        ]);
    }
}
