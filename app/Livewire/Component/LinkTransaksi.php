<?php

namespace App\Livewire\Component;

use Livewire\Component;

class LinkTransaksi extends Component
{
    public $medicalcd;
    public function render()
    {
        return view('livewire.component.link-transaksi');
    }
}
