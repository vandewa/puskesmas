<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\ComAccount;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalAccount extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id)
    {
        $this->dispatch('pilih-account', $id);
        $this->showModal();
    }

    #[On('show-modal-account')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-account');
    }

    public function render()
    {
        $data = ComAccount::cari($this->search)->paginate(5);
        return view('livewire.component.modal-account', [
            'posts' => $data
        ]);
    }
}