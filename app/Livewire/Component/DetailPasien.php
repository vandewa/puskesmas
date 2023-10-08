<?php

namespace App\Livewire\Component;

use App\Models\His\TrxMedical;
use App\Models\His\TrxPasien;
use Livewire\Component;

class DetailPasien extends Component
{
    public $pasiencd;
    public function render()
    {
        $data = TrxMedical::find($this->pasiencd);
        return view('livewire.component.detail-pasien', [
            'item' => $data
        ]);
    }
}
