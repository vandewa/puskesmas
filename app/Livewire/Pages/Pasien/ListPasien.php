<?php

namespace App\Livewire\Pages\Pasien;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxPasien;

class ListPasien extends Component
{
    use WithPagination;

    public $searchRm, $searchPasien, $searchAlamat, $searchTanggal;

    public function render()
    {
        $data = TrxPasien::with(['provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'asuransi'])
        ->carirm($this->searchRm)
        ->caripasien($this->searchPasien)
        ->carialamat($this->searchAlamat)
        ->caritanggal($this->searchTanggal)
        ->paginate(10);
        return view('livewire.pages.pasien.list-pasien', [
            'posts' => $data
        ]);
    }
}
