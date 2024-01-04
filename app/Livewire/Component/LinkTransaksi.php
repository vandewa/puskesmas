<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\TrxMedical;

class LinkTransaksi extends Component
{
    public $medicalcd;

    public function render()
    {
        $data = TrxMedical::with(['pasien', 'jenisRawat', 'dokter', 'poli', 'ruang'])->find($this->medicalcd);

        return view('livewire.component.link-transaksi', [
            'item' => $data
        ]);
    }
}
