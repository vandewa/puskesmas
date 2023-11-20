<?php

namespace App\Livewire\Component\Radiologi;

use App\Models\His\TrxMedicalUnit;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class ListProsesTIndakanLab extends Component
{
    use WithPagination;
    public $medicalcd;
    public $pasiencd;

    #[On('refresh')]
    public function refresh()
    {
        $this->resetPage();
    }
    public function render()
    {
        $item = TrxMedicalUnit::with(['drLab', 'tindakan', 'dokter'])
        ->whereHas('tindakan', function($a){
            $a->where('medunit_cd', 'RADI');
        })->where('medical_cd', $this->medicalcd)
        ->paginate(10);
        return view('class ListProsesTindakanRad', [
            'posts' => $item
        ]);
    }
}
