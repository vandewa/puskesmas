<?php

namespace App\Livewire\Demo;

use App\Models\Demo\Kelas as DemoKelas;
use App\Models\Demo\Layanan as DemoLayanan;
use App\Models\Demo\Tagihan;
use App\Models\Demo\TransaksiKeuangan;
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
// cuma di pakai oleh admin
    public function confirmBayar()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menyetujui pembayaran ini!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.lunas()
            }
          })
        JS);
    }


    public function lunas()
    {
        Tagihan::find($this->idnya)->update([
            'status' => 'Lunas'
        ]);

        $transaksiKeuangan= Tagihan::find($this->idnya);
        TransaksiKeuangan::create([
            'tanggal_transaksi' => date('Y-m-d'),
            'name' => $transaksiKeuangan->nama_tagihan,
            'pengeluaran_tp' => 'PENGELUARAN_TP_01',
            'nominal' => $transaksiKeuangan->jumlah,
            'id_ref' => $transaksiKeuangan->id,
            'model' => 'App\Models\Demo\Tagihan'
        ]);

        session()->flash('status', 'Pembayaran diterima');
    }



    public function confirmTolak()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menolak pembayaran ini!',
            type: 'success',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya',
            cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.tolak()
            }
          })
        JS);
    }

    public function tolak()
    {

       $data = Tagihan::find($this->idnya);
        Tagihan::create([
            'user_id' => $data->user_id,
            'layanan_id' => $data->layanan_id,
            'tanggal_tagihan' => $data->tanggal_tagihan,
            'nama_tagihan' => $data->nama_tagihan,
            'status' => $data->status,
            'jumlah' => $data->jumlah,
            'user_id' => $data->user_id,
            'pembayaran_tp' => $data->pembayaran_tp,
            'lamaran_id' => $data->lamaran_id,
            'ref_id' =>$this->idnya,
        ]);
       $data->update([
        'status' => 'Dibatalkan'
        ]);
        session()->flash('status', 'Pembayaran ditolak');

        // kirim wa
    }


// selesai fungsi kusus

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
