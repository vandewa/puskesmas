<?php

namespace App\Livewire\Pages\Master\DataMedis;

use App\Models\His\TrxDokter;
use App\Models\His\TrxSpesialis;
use Livewire\Component;
use Livewire\WithPagination;

class Dokter extends Component
{
    use WithPagination;

    public $form = [
        'dr_cd' => '',
        'dr_nm' => '',
        'spesialis_cd' => '',
        'nip' => '',
    ];

    public $cari, $edit = false;
    public $idHapus;

    public function mount()
    {
        $this->ambilSpesialis();
    }

    public function ambilSpesialis()
    {
        return TrxSpesialis::all()->toArray();

    }
    public function getEdit($a)
    {
        $this->form = TrxDokter::with('spesialis')->find($a)->only(['dr_cd', 'spesialis_cd', 'dr_nm', 'nip']);
        $this->edit = true;
    }

    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {
        $this->validate([
            'form.dr_cd' => 'required',
            'form.dr_nm' => 'required',
            'form.spesialis_cd' => 'required',
        ]);

        TrxDokter::create($this->form);

    }

    public function delete($id)
    {
        $this->idHapus = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.hapus()
            }
          })
        JS);
    }

    public function hapus()
    {
        TrxDokter::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxDokter::find($this->form['dr_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxDokter::with(['spesialis'])->orderBy('updated_at', 'desc')->cari($this->cari)->paginate(10);

        return view('livewire.pages.master.data-medis.dokter', [
            'post' => $data,
            'listSpesialis' => $this->ambilSpesialis()
        ]);
    }
}