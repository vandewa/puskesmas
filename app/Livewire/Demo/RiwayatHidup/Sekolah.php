<?php

namespace App\Livewire\Demo\RiwayatHidup;

use App\Models\Demo\DataKeluarga;
use Livewire\Component;

class Sekolah extends Component
{
    public $form = [
        'nama' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'pendidikan' => '',
        'pekerjaan' => '',
        'gender_tp' => '',
    ];


    public function save()
    {
       
    }

    public function render()
    {
        $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->first();

        return view('livewire.demo.riwayat-hidup.sekolah', [
            'post' => $data
        ]);
    }
}
