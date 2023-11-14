<?php

namespace App\Livewire\Demo\DataKeluarga;

use App\Models\ComCode;
use Livewire\Component;
use App\Models\Demo\DataKeluarga;
use Livewire\WithPagination;


class Anak extends Component
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

    public function mount()
    {
        $this->ambilJenisKelamin();
    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }


    public function save()
    {

    }

    public function render()
    {
        $data = DataKeluarga::where('data_keluarga_tp', 'DATA_KELUARGA_TP_02')->paginate(10);

        return view('livewire.demo.data-keluarga.anak', [
            'post' => $data,
            'listJenisKelamin' => $this->ambilJenisKelamin(),
        ]);
    }
}
