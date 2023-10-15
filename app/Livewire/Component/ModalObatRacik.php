<?php

namespace App\Livewire\Component;

use App\Models\His\InvItemMaster;
use Livewire\Component;
use App\Models\His\TrxPasien;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalObatRacik extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;
    public $hasil;

    public function pilih($id) {
        $this->dispatch('pilih-obat-racik', $id);
        $this->showModal();
    }
    public function pilihEnter() {
        if(count($this->hasil) == 1) {
            $this->dispatch('pilih-obat-racik', $this->hasil[0]->item_cd);
        }

        $this->showModal();
    }

    #[On('show-modal-obat-racik')]
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
            ->paginate(7);

        return view('livewire.component.modal-obat-racik', [
            'posts' => $data
        ]);
    }


}
