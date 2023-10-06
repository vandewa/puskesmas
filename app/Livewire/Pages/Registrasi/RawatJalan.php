<?php

namespace App\Livewire\Pages\Registrasi;

use App\Models\His\TrxIcd;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxPasien;
use App\Models\His\TrxJadwal;
use Livewire\Attributes\On;

class RawatJalan extends Component
{
    use WithPagination;

    public $pasien, $diagnosa, $alasan, $jenisPasien;
    public $form= [
        "pasien_cd" => null,
        "medical_cd" => null,
        "dr_cd" => null,
        "datetime_in" => null,
        "medical_tp" => 'MEDICAL_TP_01',
        "medical_trx_st" => 'MEDICAL_TRX_ST_0',
        "medunit_cd" => null,
        "queue_no" => null,
        "pasien_tp" => null,
        "visit_tp" => 'VISIT_TP_00',
    ];

    public $medicalRecord = [
        "pasien_cd" => null,
        "icd_cd" => null,
        "datetime_record" => null,
        "rm_tp" => "RM_TP_3",
        "icd_cd" => null,
        "medical_note" => null,
    ];
    public $searchRm, $searchPasien, $searchAlamat, $searchTanggal;

    public function mount() {
        $this->alasan = get_code('VISIT_TP');
        $this->jenisPasien = get_code('PASIEN_TP');
    }


    #[On('pilih-orang')]
    public function pilihOrang($id ="") {

        $this->pasien = TrxPasien::find($id);
        $this->form['pasien_tp'] = $this->pasien->pasien_tp;
    }

    #[On('pilih-diagnosa')]
    public function pilihDiagnosa($id ="") {

        $this->diagnosa = TrxIcd::find($id);
    }

    public function pilih($id) {
        if(!$this->pasien) {
            $this->js("Swal.fire(
                'Oops!',
                'Mohon Pilih Pasien terlebih dahulu!',
                'error'
              )");

              return ;
        }

    }

    public function render()
    {
        $data = TrxJadwal::with([ 'dokter', 'hari', 'poli'])->where('day_tp', 'DAY_TP_0'.date('w'))->paginate(100);
        return view('livewire.pages.pendaftaran.rawat-jalan', [
            'posts' => $data
        ]);
    }
}
