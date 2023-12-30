<?php

namespace App\Livewire\Demo\RiwayatHidup;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\RiwayatHidup as Riwayat;

class RiwayatHidup extends Component
{
    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $form = [
        'nama' => null,
        'kota' => null,
        'sampai_kls' => null,
        'dari_sampai_tahun' => null,
        'jurusan' => null,
        'ijazah' => null,
        'riwayat_hidup_tp' => 'RIWAYAT_HIDUP_TP_01',
        'user_id' => null
    ];

    public function mount($id = '')
    {
        $this->idnya = $id;
    }

    public function getEdit($a)
    {
        $this->form = Riwayat::find($a)->only(['nama', 'kota', 'sampai_kls', 'jurusan', 'ijazah', 'dari_sampai_tahun']);
        $this->idHapus = $a;
        $this->edit = true;
    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function store()
    {
        $this->form['user_id'] = auth()->user()->id;
        Riwayat::create($this->form);
    }

    public function delete($id)
    {
        $this->idHapus = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.hapus()
            }
          })
        JS);
    }

    public function hapus()
    {
        Riwayat::destroy($this->idHapus);
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function storeUpdate()
    {
        Riwayat::find($this->idHapus)->update($this->form);
        $this->reset();
        $this->edit = false;
    }


    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function render()
    {

        if (auth()->user()->hasRole('superadministrator')) {
            $data = Riwayat::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_01')->where('user_id', $this->idnya)->paginate(10);
        } else {
            $data = Riwayat::where('riwayat_hidup_tp', 'RIWAYAT_HIDUP_TP_01')->where('user_id', auth()->user()->id)->paginate(10);
        }

        return view('livewire.demo.riwayat-hidup.riwayat-hidup', [
            'post' => $data,
        ]);
    }
}