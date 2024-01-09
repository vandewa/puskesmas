<?php

namespace App\Livewire\Pages\Registrasi;

use App\Livewire\Pages\Pasien\ListPasien;
use App\Models\His\TrxIcd;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxPasien;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxMedical;
use Livewire\Attributes\On;
use App\Models\His\TrxQueue;

class RawatJalan extends Component
{
    use WithPagination;

    public $pasien, $diagnosa, $alasan, $jenisPasien, $medicalcd;
    public $form = [
        "pasien_cd" => null,
        "medical_cd" => null,
        "dr_cd" => null,
        "datetime_in" => null,
        "medical_tp" => 'MEDICAL_TP_01',
        "medical_trx_st" => 'MEDICAL_TRX_ST_0',
        "medunit_cd" => null,
        "queue_no" => null,
        "pasien_tp" => null,
        'jadwal_seqno' => null,
        "visit_tp" => 'VISIT_TP_00',
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
        $this->alasan = get_code('VISIT_TP');
        $this->jenisPasien = get_code('PASIEN_TP');
        if ($id != "") {
            $this->pilihOrang($id);
        }

        $this->medicalcd = $medicalcd;

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

        // masukkan unsur poli
        $jadwal = TrxJadwal::find($id);
        $this->form['dr_cd'] = $jadwal->dr_cd;
        $this->form['medunit_cd'] = $jadwal->medunit_cd;

        $ceking = TrxMedical::where('medunit_cd', $jadwal->medunit_cd)
            ->where('pasien_cd', $this->pasien->pasien_cd)
            ->where('medical_trx_st', 'MEDICAL_TRX_ST_0');

        // cek pendaftaran poli sama
        if (
            $ceking->whereDate('datetime_in', date('Y-m-d'))->where('medical_tp', 'MEDICAL_TP_01')
                ->where('jadwal_seqno', $id)->first()
        ) {

            $this->js("Swal.fire(
                    'Oops!',
                    'Pasien sudah terdaftar di poli yang sama!',
                    'error'
                  )");
            return;
        }
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
        $this->form['queue_no'] = $this->generateAntrian();
        $this->form['datetime_in'] = now();
        $rm = TrxMedical::create(
            $this->form
        );



        if ($this->medicalRecord['icd_cd'] != "") {
            $rm->medicalRecord()->create($this->medicalRecord);
        }

        $this->js('window.open("' . route('helper.print-antrian-poli', $this->form['medical_cd']) . '", "Print Antrian Poli", "width=500,height=500");');
        session()->flash('status', 'Post successfully updated.');

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
        $data = TrxJadwal::with(['dokter', 'hari', 'poli'])->where('day_tp', 'DAY_TP_0' . date('w'))->paginate(100);
        return view('livewire.pages.pendaftaran.rawat-jalan', [
            'posts' => $data
        ]);
    }
}
