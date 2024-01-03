<?php

namespace App\Livewire\Component;

use App\Livewire\Component\KajianAwal\KesehatanReproduksi;
use App\Models\RiwayatKehamilan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class ModalRiwayatKehamilanPersalinan extends Component
{
    use WithPagination;
    public $search;
    public $modal = false;

    public $medicalcd, $pasiencd;

    public $form = [
        'persalinan' => null,
        'tahun' => null,
        'jk' => null,
        'penolong' => null,
        'tempat' => null,
        'hidup_mati' => null,
        'bb' => null,
        'pb' => null,
        'komplikasi' => null,
    ];


    // public function pilih($id)
    // {
    //     $this->dispatch('pilih-riwayat', $id);
    //     $this->showModal();
    // }

    #[On('show-modal-riwayat-kehamilan-persalinan')]

    public function showModal()
    {
        $this->modal = !$this->modal;
    }

    public function save()
    {
        RiwayatKehamilan::create($this->form + ['medical_cd' => $this->medicalcd, 'pasien_cd' => $this->pasiencd]);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil disimpan.',
            icon: 'success',
          })
        JS);

        $this->dispatch('refresh')->to(KesehatanReproduksi::class);
        $this->showModal();
        $this->reset();

    }


    public function render()
    {
        return view('livewire.component.modal-riwayat-kehamilan-persalinan');
    }
}
