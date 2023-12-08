<?php

namespace App\Livewire\Global;

use Carbon\Carbon;
use Livewire\Component;

class TanggalIndo extends Component
{
    public $rubah;
    public function render()
    {
        $date = Carbon::parse($this->rubah)->locale('id');
        $date->settings(['formatFunction' => 'translatedFormat']);
        $data = $date->format('l, j F Y ; h:i a');
        return view('livewire.global.tanggal-indo',[
            'tanggal' => $data
        ]);
    }
}
