<?php

namespace App\Livewire\Component\RekamMedis;

use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxResepData;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class RiwayatRekamMedis extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]

    public function render()
    {
        $data = TrxMedicalRecord::with(['jenisKasus', 'jenisDiagnosa', 'dokter', 'icd', 'pasien', 'medical'])->where('medical_cd', '<>', $this->medicalcd)->where('pasien_cd', $this->pasiencd)->cari($this->cari)->paginate(10);
        return view('livewire.component.rekam-medis.riwayat-rekam-medis', [
            'posts' => $data
        ]);
    }
}
