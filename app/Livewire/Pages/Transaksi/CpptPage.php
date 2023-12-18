<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxParamedis;
use App\Models\His\TrxDokter;

class CpptPage extends Component
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
        $dokter = TrxDokter::all();
        $paramedis = TrxParamedis::all();
        return view('livewire.pages.transaksi.cppt-page', [
            'dokter' => $dokter,
            'paramedis' => $paramedis
        ]);
    }
}
