<?php

namespace App\Livewire\Pages\Inventori;

use App\Models\His\InvPosInventory;
use Livewire\Component;
use Livewire\WithPagination;

class PosInventoryPage extends Component
{
    use WithPagination;

    public $form = [
        'pos_cd' => '',
        'pos_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = InvPosInventory::find($a)->only(['unit_cd', 'unit_nm']);
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
            'form.pos_cd' => 'required',
            'form.pos_nm' => 'required',
        ]);

        InvPosInventory::create($this->form);

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
        InvPosInventory::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        InvPosInventory::find($this->form['unit_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = InvPosInventory::cari($this->cari)->paginate(10);
        return view('livewire.pages.inventori.pos-inventory-page', [
            'post' => $data
        ]);
    }
}
