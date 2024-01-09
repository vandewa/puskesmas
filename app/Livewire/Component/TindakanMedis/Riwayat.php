<?php

namespace App\Livewire\Component\TindakanMedis;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\His\TrxMedicalTindakan;

class Riwayat extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]

    public function render()
    {
        $data = TrxMedicalTindakan::with(['tindakan', 'dokter', 'medical', 'bangsal'])->paginate(10);
        return view('livewire.component.tindakan-medis.riwayat', [
            'posts' => $data
        ]);
    }
}
