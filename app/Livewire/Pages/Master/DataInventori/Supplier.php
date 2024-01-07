<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\PoSupplier;

class Supplier extends Component
{
    use WithPagination;
    public $form = [
        'supplier_cd' => '',
        'supplier_nm' => '',
        'address' => '',
        'city' => '',
        'province' => '',
        'postcode' => '',
        'phone' => '',
        'mobile' => '',
        'fax' => '',
        'email' => '',
        'npwp' => '',
        'pic' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;


    public function mount($id = "")
    {
        if ($id != "") {
            $this->edit = true;
            $this->form = PoSupplier::find($id)->only(
                [
                    'supplier_cd',
                    'supplier_nm',
                    'address',
                    'city',
                    'province',
                    'postcode',
                    'phone',
                    'mobile',
                    'fax',
                    'email',
                    'npwp',
                    'pic',
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
            'form.supplier_cd' => 'required',
            'form.supplier_nm' => 'required',
        ]);

        PoSupplier::create($this->form);
        $this->redirect(route('inventori.supplier.index'));
    }


    public function storeUpdate()
    {
        PoSupplier::find($this->form['supplier_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
        $this->redirect(route('inventori.supplier.index'));
    }

    public function render()
    {
        return view('livewire.pages.master.data-inventori.supplier');
    }
}
