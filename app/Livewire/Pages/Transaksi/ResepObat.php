<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Component;

class ResepObat extends Component
{
    public $medicalcd;

    public function mount($id) {
        $this->medicalcd = $id;
    }
    public function render()
    {
        return view('livewire.pages.transaksi.resep-obat');
    }
}
