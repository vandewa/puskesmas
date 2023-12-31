<?php

namespace App\Livewire\Pages\Master\DataMedis\InstalasiMedis;

use App\Models\His\TrxUnitMedis;
use Livewire\Component;
use Livewire\WithPagination;

class Poliklinik extends Component
{
    use WithPagination;

    public $form = [
        'medunit_cd' => '',
        'medunit_nm' => '',
        'queue' => '',
        'medicalunit_tp' => 'MEDICALUNIT_TP_1',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function getEdit($a)
    {
        $this->form = TrxUnitMedis::find($a)->only(['medunit_cd', 'medunit_nm', 'queue']);
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
            'form.medunit_cd' => 'required',
            'form.medunit_nm' => 'required',
        ]);

        TrxUnitMedis::create($this->form);

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
        TrxUnitMedis::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxUnitMedis::find($this->form['medunit_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxUnitMedis::cari($this->cari)->where('medicalunit_tp', 'MEDICALUNIT_TP_1')->paginate(10);
        return view('livewire.pages.master.data-medis.instalasi-medis.poliklinik', [
            'post' => $data
        ]);
    }
}