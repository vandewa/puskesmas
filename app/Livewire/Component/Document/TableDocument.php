<?php

namespace App\Livewire\Component\Document;

use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxResepData;
use App\Models\TrxDocument;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class TableDocument extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]
    public function racik()
    {

    }
    public function render()
    {
        $data = TrxDocument::with(['document'])
        ->where('medical_cd', $this->medicalcd)
        ->paginate(10);
        return view('livewire.component.document.table-document', [
            'posts' => $data
        ]);
    }
}
