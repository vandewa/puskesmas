<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\PoPrincipal;

class ListPrincipal extends Component
{
    use WithPagination;

    public $idHapus, $cari;

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        PoPrincipal::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function render()
    {
        $data = PoPrincipal::paginate(10);
        return view('livewire.pages.master.data-inventori.list-principal', [
            'post' => $data
        ]);
    }
}