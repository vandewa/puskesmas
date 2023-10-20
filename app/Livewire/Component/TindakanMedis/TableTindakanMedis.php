<?php

namespace App\Livewire\Component\TindakanMedis;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\His\TrxMedicalTindakan;

class TableTindakanMedis extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]

    public function render()
    {
        $data = TrxMedicalTindakan::with(['dokter', 'tindakan', 'medical'])->where('medical_cd', $this->medicalcd)->cari($this->cari)->paginate(10);
        return view('livewire.component.tindakan-medis.table-tindakan-medis', [
            'posts' => $data
        ]);
    }
}
