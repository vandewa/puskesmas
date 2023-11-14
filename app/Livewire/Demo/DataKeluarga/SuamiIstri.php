<?php

namespace App\Livewire\Demo\DataKeluarga;

use App\Models\Demo\DataKeluarga;
use Livewire\Component;
use Livewire\WithPagination;


class SuamiIstri extends Component
{
    use WithPagination;

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
        $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_01')->paginate(2);

        return view('livewire.demo.data-keluarga.suami-istri', [
            'post' => $data
        ]);
    }
}
