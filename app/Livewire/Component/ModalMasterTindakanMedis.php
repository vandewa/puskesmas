<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\His\TrxTindakan;

class ModalMasterTindakanMedis extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public function pilih($id)
    {
        $this->dispatch('pilih-master-tindakan-medis', $id);
        $this->showModal();
    }

    #[On('show-modal-master-tindakan-medis')]
    public function showModal()
    {
        $this->modal = !$this->modal;
        $this->search = null;
        $this->dispatch('autofocus', id: 'search-master-tindakan-medis');
    }
    public function render()
    {
        $data = TrxTindakan::cari($this->search)->paginate(10);
        return view('livewire.component.modal-master-tindakan-medis', [
            'posts' => $data
        ]);
    }
}