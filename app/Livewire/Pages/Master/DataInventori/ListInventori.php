<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\InvItemMaster;

class ListInventori extends Component
{
    use WithPagination;

    public $idHapus;

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        InvItemMaster::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function render()
    {
        $data = InvItemMaster::with(['satuan', 'type', 'generic'])->paginate(10);
        return view('livewire.pages.master.data-inventori.list-inventori', [
            'post' => $data
        ]);
    }
}