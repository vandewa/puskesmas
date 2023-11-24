<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Lamaran;

class LamaranPage extends Component
{
    use WithPagination;

    public function mount() {
        if(auth()->user()->hasRole('superadministrator')){
            redirect()->route('admin.aktivasi-user');
        }
    }
    public $jenisLamaran = '';

    public function simpan($id) {

        $this->jenisLamaran = $id;
        $cek = Lamaran::where('user_id', auth()->user()->id)->where('status', 'Dalam Proses')->first();
        if($cek) {
            $this->js(<<<'JS'

                    Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Anda memiliki lamaran yang belum selesai diproses!",

                    });

        JS);

        return ;
        }
        // cek activasi
        if(!auth()->user()->active_st){
            $this->js(<<<'JS'

            Swal.fire({
            title: 'Anda belum melakukan aktivasi akun, aktivasi sekarang?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Iya',
            denyButtonText: `Tidak`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                $wire.redirectBayar()
            //   Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
            Swal.fire('Anda tidak jadi aktivasi', '', 'info')
            }})

        JS);




        return ;
        }

        $this->js(<<<'JS'

                Swal.fire({
                title: 'Anda yakin akan melamar sekarang?',
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: 'Iya',
                denyButtonText: `Tidak`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                $wire.save()
                //   Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                Swal.fire('Anda tidak jadi melamar', '', 'info')
                }})
            JS);


    }

    public function redirectBayar() {
        redirect()->route('pendaftaran.aktivasi');
    }

    public function save()
    {

        Lamaran::create([
            'user_id' => auth()->user()->id,
            'no_reg' => date('Y/m/d-').auth()->user()->id,
            'tahapan_id' => 1,
            'status' => 'Dalam Proses',
            'lamaran_tp' =>  $this->jenisLamaran,
        ]);
    }
    public function render()
    {
        $data = Lamaran::with(['tahapan', 'user'])
        ->where('user_id', auth()->user()->id)
        ->paginate(10);
        return view('livewire.demo.lamaran-page', [
            'posts' => $data
        ]);
    }
}
