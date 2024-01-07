<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\PoPrincipal;

class Principal extends Component
{
    use WithPagination;
    public $form = [
        'principal_cd' => '',
        'principal_nm' => '',
        'address' => '',
        'city' => '',
        'province' => '',
        'postcode' => '',
        'phone' => '',
        'mobile' => '',
        'fax' => '',
        'email' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;


    public function mount($id = "")
    {
        if ($id != "") {
            $this->edit = true;
            $this->form = PoPrincipal::find($id)->only(
                [
                    'principal_cd',
                    'principal_nm',
                    'address',
                    'city',
                    'province',
                    'postcode',
                    'phone',
                    'mobile',
                    'fax',
                    'email',
                ]
            );
        }
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
            'form.principal_cd' => 'required',
            'form.principal_nm' => 'required',
        ]);

        PoPrincipal::create($this->form);
        $this->redirect(route('inventori.principal.index'));
    }


    public function storeUpdate()
    {
        PoPrincipal::find($this->form['principal_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
        $this->redirect(route('inventori.principal.index'));
    }

    public function render()
    {
        return view('livewire.pages.master.data-inventori.principal');
    }
}
