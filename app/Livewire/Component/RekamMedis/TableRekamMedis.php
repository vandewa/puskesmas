<?php

namespace App\Livewire\Component\RekamMedis;

use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxResepData;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class TableRekamMedis extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]
    public function racik()
    {

    }
    public function render()
    {
        $data = TrxMedicalRecord::with(['jenisKasus', 'jenisDiagnosa', 'dokter', 'icd', 'pasien', 'medical', 'rmGeneral'])->where('medical_cd', $this->medicalcd)->cari($this->cari)->paginate(10);
        return view('livewire.component.rekam-medis.table-rekam-medis', [
            'posts' => $data
        ]);
    }
}
