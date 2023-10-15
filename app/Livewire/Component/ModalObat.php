<?php

namespace App\Livewire\Component;

use App\Models\His\InvItemMaster;
use Livewire\Component;
use App\Models\His\TrxPasien;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalObat extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;
    public $hasil;

    public function pilih($id) {
        $this->dispatch('pilih-obat', $id);
        $this->showModal();
    }
    public function pilihEnter() {
        if(count($this->hasil) == 1) {
            $this->dispatch('pilih-obat', $this->hasil[0]->item_cd);
        }

        $this->showModal();
    }

    #[On('show-modal-pasien')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-obat');

    }

    public function render()
    {
        $data = InvItemMaster::with(['satuan'])
        ->cari($this->search)
            ->paginate(10);

        return view('livewire.component.modal-obat', [
            'posts' => $data
        ]);
    }
}
