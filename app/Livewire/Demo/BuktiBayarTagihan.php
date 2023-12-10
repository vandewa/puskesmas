<?php

namespace App\Livewire\Demo;

use App\Models\Demo\Kelas as DemoKelas;
use App\Models\Demo\Layanan as DemoLayanan;
use App\Models\Demo\Tagihan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class BuktiBayarTagihan extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $idHapus, $edit = false, $idnya, $listLayanan;


    public $bukti_bayar ;

    public function mount($id = '')
    {
        $this->idnya = $id;


    }

    public function storeUpdate()
    {

        $this->validate([
            'bukti_bayar' => 'required|image'
        ]);
       $data = $this->bukti_bayar->store('bukti-bayar', 'public');

       Tagihan::find($this->idnya)->update([
            'bukti_bayar' => $data,
            'tanggal_pelunasan' => now(),
        ]);
        // $this->reset();
        // $this->edit = false;

        session()->flash('status', 'Upload Berhasil');
    }


    public function render()
    {
        $data =Tagihan::find($this->idnya);

        return view('livewire.demo.bukti-bayar-tagihan', [
            'pembayaran' => $data,
        ]);
    }
}
