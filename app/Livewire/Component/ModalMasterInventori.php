<?php

namespace App\Livewire\Component;

use App\Models\His\InvItemMaster;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalMasterInventori extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id)
    {
        $this->dispatch('pilih-master-inventori', $id);
        $this->showModal();
    }

    #[On('show-modal-master-inventori')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-master-inventori');
    }

    public function render()
    {
        $data = InvItemMaster::cari($this->search)->paginate(5);
        return view('livewire.component.modal-master-inventori', [
            'posts' => $data
        ]);
    }
}