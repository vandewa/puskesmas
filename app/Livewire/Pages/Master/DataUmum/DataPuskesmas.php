<?php

namespace App\Livewire\Pages\Master\DataUmum;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxRs;

class DataPuskesmas extends Component
{
    use WithPagination;

    public $form = [
        'rs_cd' => '',
        'rs_nm' => '',
        'address' => '',
        'phone' => '',
        'email' => '',
        'fax' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = TrxRs::find($a)->only(['rs_cd', 'rs_nm', 'address', 'phone', 'email', 'fax']);
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
            'form.rs_cd' => 'required',
            'form.rs_nm' => 'required',
            'form.address' => 'required',
            'form.phone' => 'required',
            'form.email' => 'required',
            'form.fax' => 'required',
        ]);

        TrxRs::create($this->form);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        TrxRs::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxRs::find($this->form['paramedis_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxRs::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-umum.data-puskesmas', [
            'post' => $data
        ]);
    }
}