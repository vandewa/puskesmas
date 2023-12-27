<?php

namespace App\Livewire\Component;

use App\Livewire\Component\Laboratorium\ListProsesTIndakanLab;
use App\Models\His\TrxMedical;
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
    public $seqno;

    public $medicalcd;

    public $form = [
        'file_report' => null,
    ];


    #[On('show-modal-hasil-tindakan-lab')]
    public function ambilProperty($id)
    {
       $this->showModal();
       $this->seqno = $id;
       $this->form['file_report'] = TrxMedicalUnit::find($id)->file_report??"";
        // dd($id);
    }

    public function showModal() {
        $this->modal = !$this->modal;
    }

    public function save()
    {
        TrxMedicalUnit::find($this->seqno)->update([
            'file_report' => $this->form['file_report']
        ]);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil disimpan.',
            icon: 'success',
          })
        JS);

        $this->dispatch('refresh')->to(ListProsesTIndakanLab::class);
        $this->modal = !$this->modal;

    }


    public function render()
    {
        return view('livewire.component.modal-hasil-tindakan-lab');
    }
}
