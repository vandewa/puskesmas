<?php

namespace App\Livewire\Component\Resep;

use App\Models\His\TrxResepData;
use Livewire\WithPagination;

use Livewire\Component;

class ResepTableResepRiwayat extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;
    public function render()
    {
        $data = TrxResepData::with(['resepHeader.dokter'])->cari($this->cari)->whereHas('resepHeader',  function($a) {
            $a->where('medical_cd','<>', $this->medicalcd)
            ->whereHas('medical', function($a){
                $a->where('pasien_cd', $this->pasiencd);
            });
        })->paginate(10);
        return view('livewire.component.resep.resep-table-resep-riwayat', [
            'posts' => $data
        ]);
    }
}
