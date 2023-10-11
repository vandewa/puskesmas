<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use App\Models\His\InvUnit;
use Livewire\WithPagination;
use App\Models\His\InvItemType;
use App\Models\His\PoPrincipal;
use App\Models\His\InvItemMaster;
use App\Models\His\InvItemGolongan;

class Inventori extends Component
{
    use WithPagination;
    public $form = [
        'item_cd' => '',
        'item_nm' => '',
        'type_cd' => '',
        'unit_cd' => '',
        'golongan_cd' => '',
        'sub_golongan_cd' => '',
        'kategori_cd' => '',
        'item_price_buy' => '',
        'item_price' => '',
        'vat_tp' => '',
        'ppn' => '',
        'minimum_stock' => '',
        'maximum_stock' => '',
        'principal_cd' => '',
        'inventory_st' => '',
        'generik_st' => '',
    ];
    public $cari, $edit = false, $jenis, $satuan, $gol, $subgol, $kelompok, $pajak, $principal;
    public $idHapus;


    public function mount($id = "")
    {
        $this->jenis = InvItemType::get()->toArray();
        $this->satuan = InvUnit::get()->toArray();
        $this->gol = InvItemGolongan::get()->toArray();
        $this->pajak = get_code('VAT_TP');
        $this->principal = PoPrincipal::get()->toArray();

        if ($id != "") {
            $this->edit = true;
            $this->form = InvItemMaster::find($id)->only(
                [
                    'item_cd',
                    'item_nm',
                    'type_cd',
                    'unit_cd',
                    'golongan_cd',
                    'sub_golongan_cd',
                    'kategori_cd',
                    'item_price_buy',
                    'item_price',
                    'vat_tp',
                    'ppn',
                    'minimum_stock',
                    'maximum_stock',
                    'principal_cd',
                    'inventory_st',
                    'generik_st',
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
            'form.item_cd' => 'required',
            'form.item_nm' => 'required',
            'form.type_cd' => 'required',
            'form.unit_cd' => 'required',
            'form.golongan_cd' => 'required',
            'form.sub_golongan_cd' => 'required',
            'form.kategori_cd' => 'required',
            'form.item_price_buy' => 'required',
            'form.item_price' => 'required',
            'form.vat_tp' => 'required',
            'form.ppn' => 'required',
            'form.minimum_stock' => 'required',
            'form.maximum_stock' => 'required',
            'form.principal_cd' => 'required',
        ]);

        InvItemMaster::create($this->form);
        $this->redirect(route('master.inventori.index'));
    }


    public function storeUpdate()
    {
        InvItemMaster::find($this->form['item_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
        $this->redirect(route('master.inventori.index'));
    }

    public function render()
    {
        $data = InvItemMaster::with(['satuan', 'type', 'generic'])->paginate(10);

        return view('livewire.pages.master.data-inventori.inventori', [
            'post' => $data
        ]);
    }
}