<?php

namespace App\Livewire\Pages\Keuangan;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;

class ProsesPembayaran extends Component
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
        return view('livewire.pages.keuangan.proses-pembayaran');
    }
}