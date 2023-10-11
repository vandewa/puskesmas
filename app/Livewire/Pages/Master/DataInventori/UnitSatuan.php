<?php

namespace App\Livewire\Pages\Master\DataInventori;

use App\Models\His\InvUnit;
use Livewire\Component;
use Livewire\WithPagination;

class UnitSatuan extends Component
{
    use WithPagination;

    public $form = [
        'unit_cd' => '',
        'unit_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;
    public function getEdit($a)
    {
        $this->form = InvUnit::find($a)->only(['unit_cd', 'unit_nm']);
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
            'form.unit_cd' => 'required',
            'form.unit_nm' => 'required',
        ]);

        InvUnit::create($this->form);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        InvUnit::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        InvUnit::find($this->form['unit_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = InvUnit::cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-inventori.unit-satuan', [
            'post' => $data
        ]);
    }
}