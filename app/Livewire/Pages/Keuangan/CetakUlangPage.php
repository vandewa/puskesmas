<?php

namespace App\Livewire\Pages\Keuangan;

use App\Models\His\TrxSettlement;
use Livewire\WithPagination;

use Livewire\Component;

class CetakUlangPage extends Component
{
    use WithPagination;

    public $rm;
    public $tanggal;
    public function render()
    {
        $data = TrxSettlement::with(['pasien'])->carirm($this->rm)
        ->caritanggal($this->tanggal)
        ->paginate(10);
        return view('livewire.pages.keuangan.cetak-ulang-page',[
            'data' => $data
        ]);
    }
}
