<?php

namespace App\Livewire\Component;

use App\Models\RiwayatKehamilan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use App\Models\His\TrxMedicalUnit;

class ModalHasilTindakanLab extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public $medicalcd;

    public $form = [
        'file_report' => null,
    ];


    #[On('show-modal-hasil-tindakan-lab')]


    public function showModal()
    {
        $this->modal = !$this->modal;
    }

    public function save()
    {
        TrxMedicalUnit::where('medical_cd', $this->medicalcd)->first()->update([
            'file_report' => $this->form['file_report']
        ]);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil disimpan.',
            icon: 'success',
          })
        JS);

        $this->dispatch('pilih-riwayat');
        $this->showModal();

    }


    public function render()
    {
        return view('livewire.component.modal-hasil-tindakan-lab');
    }
}