<?php

namespace App\Livewire\Pages\Master\DataUmum;

use Livewire\Component;
use App\Models\His\TrxRs;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DataPuskesmas extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $photo;

    public $form = [
        'rs_cd' => '',
        'rs_nm' => '',
        'address' => '',
        'phone' => '',
        'email' => '',
        'fax' => '',
        'path' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = TrxRs::find($a)->only(['rs_cd', 'rs_nm', 'address', 'phone', 'email', 'fax', 'path']);
        $this->edit = true;
    }

    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {
        $this->validate([
            'form.rs_cd' => 'required',
            'form.rs_nm' => 'required',
            'form.address' => 'required',
            'form.phone' => 'required',
            'form.email' => 'required',
            'form.fax' => 'required',
        ]);

        TrxRs::create($this->form);

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
        TrxRs::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        if ($this->photo) {
            $this->form['path'] = $this->photo->store('photos', 'public');
        }

        TrxRs::find($this->form['rs_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxRs::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-umum.data-puskesmas', [
            'post' => $data
        ]);
    }
}