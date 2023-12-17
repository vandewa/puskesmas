<?php

namespace App\Livewire\Pages\Farmasi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;

class ListFarmasi extends Component
{
    public function render()
    {
        $post = TrxMedical::
        with([
            'pasien', 'poli', 'dokter', 'ruang',
        ])
        ->whereHas('resepObat', function($a){
            $a->where('proses_st', 0);
        })
        ->paginate(10);
        return view('livewire.pages.farmasi.list-farmasi',[
            'posts' => $post
        ]);
    }
}
