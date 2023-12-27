<?php

namespace App\Livewire\\Component\Cppt;

use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxResepData;
use App\Models\TrxCppt;
use App\Models\TrxDocument;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class TableCppt extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]
    public function racik()
    {

    }
    public function render()
    {
        $data = TrxCppt::where('medical_cd', $this->medicalcd)
        ->paginate(10);
        return view('livewire..component.cppt.table-cppt', [
            'posts' => $data
        ]);
    }
}
