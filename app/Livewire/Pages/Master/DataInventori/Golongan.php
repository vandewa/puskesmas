<?php

namespace App\Livewire\Pages\Master\DataInventori;

use App\Models\His\InvItemGolongan;
use Livewire\Component;
use Livewire\WithPagination;

class Golongan extends Component
{
    use WithPagination;

    public $form = [
        'golongan_cd' => '',
        'golongan_nm' => '',
        'root_cd' => '',
        'level_no' => '',
    ];
    public $cari, $edit = false;
    public $idHapus, $root;

    public function mount()
    {
        $this->root = InvItemGolongan::where('level_no', 1)->get()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = InvItemGolongan::find($a)->only(['golongan_cd', 'golongan_nm', 'root_cd', 'level_no']);
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
            'form.golongan_cd' => 'required',
            'form.golongan_nm' => 'required',
        ]);

        if ($this->form['root_cd'] == '') {
            $this->form['level_no'] = '1';
        }


        InvItemGolongan::create([
            'golongan_cd' => $this->form['golongan_cd'],
            'golongan_nm' => $this->form['golongan_nm'],
            'level_no' => $this->form['level_no'],
        ]);

    }

    public function setDelete($id)
    {
        $this->idHapus = $id;
    }
    public function delete()
    {
        InvItemGolongan::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        if ($this->form['root_cd'] == '') {
            $this->form['level_no'] = '1';
        } else {
            $this->form['level_no'] = null;
        }

        InvItemGolongan::find($this->form['golongan_cd'])->update([
            'golongan_cd' => $this->form['golongan_cd'],
            'golongan_nm' => $this->form['golongan_nm'],
            'root_cd' => $this->form['root_cd'],
            'level_no' => $this->form['level_no'],
        ]);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = InvItemGolongan::with(['root'])->cari($this->cari)->paginate(10);

        // dd($data);
        return view('livewire.pages.master.data-inventori.golongan', [
            'post' => $data
        ]);
    }
}