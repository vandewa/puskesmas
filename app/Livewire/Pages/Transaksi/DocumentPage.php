<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\Attributes\On;

class DocumentPage extends Component
{
    public $medicalcd;

    public $medik;


    public function mount($id) {
        $this->medicalcd = $id;

        $this->medik = TrxMedical::find($id);
    }
    public function render()
    {
        return view('livewire.pages.transaksi.document-page');
    }
}
