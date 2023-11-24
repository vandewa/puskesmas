<?php

namespace App\Livewire\Demo\RiwayatHidup;

use Livewire\Component;
use Livewire\WithPagination;


class ListTransaksi extends Component
{
    use WithPagination;
    public $url = 'pendaftaran.rawat-jalan.detail.rawat-jalan';

    public function mount($url = "")
    {
        if ($url != "") {
            $this->url = $url;
        }
    }

    public function render()
    {
        return view('livewire.demo.riwayat-hidup.list-transaksi');
    }
}
