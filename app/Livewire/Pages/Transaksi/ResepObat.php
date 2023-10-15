<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\Attributes\On;

class ResepObat extends Component
{
    public $medicalcd;

    public $medik;
    public $racik = false;

    #[On('show-racik')]
    public function racik()
    {
        $this->racik = !$this->racik;
    }

    public function mount($id) {
        $this->medicalcd = $id;

        $this->medik = TrxMedical::find($id);
    }
    public function render()
    {
        return view('livewire.pages.transaksi.resep-obat');
    }
}
