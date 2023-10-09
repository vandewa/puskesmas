<?php

namespace App\Livewire\Pages\Registrasi;

use Livewire\Component;

class RawatInap extends Component
{
    public function render()
    {
        // $data = TrxJadwal::with(['dokter', 'hari', 'poli'])->where('day_tp', 'DAY_TP_0' . date('w'))->paginate(100);

        return view('livewire.pages.registrasi.rawat-inap', [
            // 'posts' => $data
        ]);
    }
}