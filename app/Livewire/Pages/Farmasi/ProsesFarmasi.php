<?php

namespace App\Livewire\Pages\Farmasi;

use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;
use App\Models\His\TrxResepData;
use Livewire\Component;

class ProsesFarmasi extends Component
{
    public $medicalcd;
    public function mount($id = '') {
        if($id) {
            $this->medicalcd = $id;
        }
    }
    public function render()
    {
        $data = TrxMedicalResep::with(['resepData.resepRacik'])->where('medical_cd', $this->medicalcd)->get();
        // $data = TrxResepData::whereHas('resepHeader', function($a){
        //         $a->where('medical_cd', $this->medicalcd);
        // })->with(['resepHeader'])->get();

        return view('livewire.pages.farmasi.proses-farmasi',
        ['resep' => $data]);
    }
}
