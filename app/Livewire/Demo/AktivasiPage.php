<?php

namespace App\Livewire\Demo;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;


class AktivasiPage extends Component
{

    use WithFileUploads;


    public $bukti;

    public $aktivasi;

    public function mount() {
        $this->aktivasi = auth()->user()->tanggal_upload == '';
    }

    public function save()
    {
        $this->validate([
            'bukti' => 'image'
        ]);
        $a = $this->bukti->store('public/bukti');

     $a =    User::find(auth()->user()->id)->update([
            'tanggal_upload' => date('Y-m-d'),
            'path_dokumen' => $a,
        ]);
        $this->aktivasi = false;
        session()->flash('status', 'Buktu Upload telah terkirim.');

    }

    public function render()
    {
        return view('livewire.demo.aktivasi-page');
    }
}
