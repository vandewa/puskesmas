<?php

namespace App\Livewire\Demo;

use Livewire\Component;
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
        $data = User::where('tanggal_upload','<>', null)->where('active_st', false)
        ->paginate(10);
        return view('livewire.demo.aktivasi-user-page', [
            'posts' => $data
        ]);
    }
}
