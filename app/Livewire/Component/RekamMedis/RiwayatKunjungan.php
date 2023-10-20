<?php

namespace App\Livewire\Component\RekamMedis;

use App\Models\His\TrxMedical;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class RiwayatKunjungan extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]

    public function render()
    {
        $data = TrxMedical::with(['poli', 'ruang', 'dokter'])->where('medical_cd', '<>', $this->medicalcd)->where('pasien_cd', $this->pasiencd)->cari($this->cari)->paginate(10);
        return view('livewire.component.rekam-medis.riwayat-kunjungan', [
            'posts' => $data
        ]);
    }
}
