<?php

namespace App\Livewire\Pages\Registrasi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxPasien;
use App\Models\His\TrxJadwal;

class RawatJalan extends Component
{
    use WithPagination;

    public $searchRm, $searchPasien, $searchAlamat, $searchTanggal;

    public $selected;

    public function pilih($id) {
        $this->selected = $id;
    }

    public function render()
    {
        $data = TrxJadwal::with([ 'dokter', 'hari', 'poli'])->where('day_tp', 'DAY_TP_0'.date('w'))->paginate(100);
        return view('livewire.pages.pendaftaran.rawat-jalan', [
            'posts' => $data
        ]);
    }
}
