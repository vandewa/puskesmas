<?php

namespace App\Livewire\Demo;

use App\Models\His\ComCode;
use Livewire\Component;

class DataPribadi extends Component
{

    public $form = [
        'nama' => '',
        'tempat_lahir' => '',
        'tgl_lahir' => '',
        'marital_tp' => '',
        'sex_tp' => '',
        'ktp' => '',
        'telepon' => '',
        'telepon_wali' => '',
        'blod_tp' => '',
        'ukuran_sepatu' => '',
        'ukuran_baju' => '',
        'alamat_sekarang' => '',
        'alamat_wali' => '',
        'education_tp' => '',
        'keterampilan' => '',
        'agama' => '',
    ];

    public function mount()
    {
        $this->ambilJenisKelamin();
        $this->ambilStatus();
    }

    public function ambilJenisKelamin()
    {
        return ComCode::where('code_group', 'GENDER_TP')->get()->toArray();
    }
    public function ambilStatus()
    {
        return ComCode::where('code_group', 'MARITAL_TP')->get()->toArray();
    }
    public function ambilDarah()
    {
        return ComCode::where('code_group', 'BLOOD_TP')->get()->toArray();
    }
    public function ambilPendidikan()
    {
        return ComCode::where('code_group', 'EDUCATION_CD')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.demo.data-pribadi', [
            'listJenisKelamin' => $this->ambilJenisKelamin(),
            'listStatus' => $this->ambilStatus(),
            'listDarah' => $this->ambilDarah(),
            'listPendidikan' => $this->ambilPendidikan()
        ]);
    }
}
