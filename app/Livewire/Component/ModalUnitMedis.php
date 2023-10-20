<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\TrxUnitmedisItem;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalUnitMedis extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id)
    {
        $this->dispatch('pilih-unit-medis', $id);
        $this->showModal();
    }

    #[On('show-modal-unit-medis')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-unit-medis');
    }

    public function render()
    {
        $data = TrxUnitmedisItem::cari($this->search)->paginate(7);
        return view('livewire.component.modal-unit-medis', [
            'posts' => $data
        ]);
    }
}