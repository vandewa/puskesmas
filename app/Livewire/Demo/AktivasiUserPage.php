<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use App\Jobs\kirimWhatsapp;
use Livewire\WithPagination;
use App\Models\User;

class AktivasiUserPage extends Component
{
    use WithPagination;
    public $pilih;
    public $info;

    public function proses($id) {
        $this->pilih = $id;
        $this->info = User::find($id);

        $this->js(<<<'JS'
        document.body.scrollTop = document.documentElement.scrollTop = 0;
        JS);
    }

    public function cancel() {
        $this->pilih = null;
        $this->info = null;
    }

    public function save() {
        User::find($this->pilih)->update([
            'active_st' => true
        ]);
        $pesan ='Proses lamaran kerja anda sudah selesai dan akan diinformasikan untuk melakukan proses penyelesaian persyaratan pelatihan bahasa Jepang'."\n" ;

        kirimWhatsapp::dispatch($pesan, $this->info->telepon);
        session()->flash('status', 'Pemohon berhasil diaktivasi.');

        $this->cancel();
    }

    public function tolak() {
        User::find($this->pilih)->update([
            'tanggal_upload' => null,
            'path_dokumen' => null
        ]);
        $this->cancel();

        session()->flash('status', 'Pemohon berhasil ditolak.');

    }
    public function render()
    {
        $data = User::where('tanggal_upload','<>', null)->where('active_st', false)->orwhere('active_st', null)
        ->paginate(10);
        return view('livewire.demo.aktivasi-user-page', [
            'posts' => $data
        ]);
    }
}
