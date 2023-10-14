<?php

namespace App\Livewire\Pages\Master\DataInventori;

use App\Models\His\InvItemType;
use Livewire\Component;
use Livewire\WithPagination;

class Tipe extends Component
{
    use WithPagination;

    public $form = [
        'type_cd' => '',
        'type_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = InvItemType::find($a)->only(['type_cd', 'type_nm']);
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
            'form.type_cd' => 'required',
            'form.type_nm' => 'required',
        ]);

        InvItemType::create($this->form);

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
        InvItemType::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");

    }

    public function storeUpdate()
    {
        InvItemType::find($this->form['type_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = InvItemType::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-inventori.tipe', [
            'post' => $data
        ]);
    }
}