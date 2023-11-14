<?php

namespace App\Livewire\Demo;

use App\Models\His\ComCode;
use Livewire\Component;

class DataPribadi extends Component
{

    public $form = [
        'tinggi' => '',
        'berat' => '',
        'hoby' => '',
        'or_yg_dikuasai' => '',
        'sakit' => '',
        'sakit_apa' => '',
        'sakit_kapan' => '',
        'kecelakaan' => '',
        'kecelakaan_ket' => '',
        'kecelakaan_kapan' => '',
        'kecelakaan_akibat' => '',
        'kegiatan_terlarang' => '',
        'polisi' => '',
        'polisi_ket' => '',
        'astek' => '',
        'no_kpa' => '',
        'penataran' => '',
        'penataran_kapan' => '',
        'penataran_pola' => '',
        'penataran_penyelenggara' => '',
        'bahasa_1' => '',
        'bahasa_2' => '',
        'bahasa_3' => '',
        'bahasa_4' => '',
        'sim' => '',
    ];

    public function save()
    {

    }

    public function render()
    {
        return view('livewire.demo.data-pribadi', [

        ]);
    }
}
