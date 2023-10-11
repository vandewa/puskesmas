<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\PoSupplier;

class ListSupplier extends Component
{
    use WithPagination;

    public $idHapus, $cari;

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        PoSupplier::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function render()
    {
        $data = PoSupplier::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-inventori.list-supplier', [
            'post' => $data
        ]);
    }
}