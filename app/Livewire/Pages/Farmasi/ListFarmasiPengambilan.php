<?php

namespace App\Livewire\Pages\Farmasi;

use App\Models\His\ComCode;
use App\Models\His\TrxDokter;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;

class ListFarmasiPengambilan extends Component
{
    public $norm, $rawat, $tanggal, $dokter;

    public function render()
    {
        $rawat = ComCode::where('code_group', 'MEDICAL_TP')->get();
        $dokter = TrxDokter::all();
        // dd($rawat);
        $post = TrxMedical::
        with([
            'pasien', 'poli', 'dokter', 'ruang',
        ]);
        if($this->norm) {
            $post->carirm($this->norm);
        }
        if($this->dokter){
            $post->caridokter($this->dokter);
        }
        if($this->rawat){
            $post->cariJenisRawat($this->rawat);
        }
        if($this->tanggal){
            $post->cariTanggal($this->tanggal);
        }
        $post = $post->whereHas('resepObat', function($a){
            $a->where('proses_st', 0);
        })
        ->paginate(10);
        return view('livewire.pages.farmasi.list-farmasi-pengambilan',[
            'posts' => $post,
            'jenisRawat' => $rawat,
            'listDokter' => $dokter
        ]);
    }
}
