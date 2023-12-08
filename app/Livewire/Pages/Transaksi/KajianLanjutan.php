<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;

class KajianLanjutan extends Component
{
    use WithPagination;

    public $medicalcd;

    public $medik;

    public function mount($id)
    {
        $this->medicalcd = $id;

        $this->medik = TrxMedical::find($id);
    }

    public function render()
    {
        return view('livewire.pages.transaksi.kajian-lanjutan');
    }
}