<?php

namespace App\Livewire\Pages\Master\DataInventori;

use App\Models\His\InvItemCategory;
use Livewire\Component;
use Livewire\WithPagination;

class Kelompok extends Component
{
    use WithPagination;

    public $form = [
        'kategori_cd' => '',
        'kategori_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = InvItemCategory::find($a)->only(['kategori_cd', 'kategori_nm']);
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
            'form.kategori_cd' => 'required',
            'form.kategori_nm' => 'required',
        ]);

        InvItemCategory::create($this->form);

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
        InvItemCategory::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");

    }

    public function storeUpdate()
    {
        InvItemCategory::find($this->form['kategori_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = InvItemCategory::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-inventori.kelompok', [
            'post' => $data
        ]);
    }
}