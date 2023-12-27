<?php

namespace App\Livewire\Pages\Master\DataMedis\InstalasiMedis;

use App\Models\His\TrxUnitmedisItem;
use Livewire\Component;
use Livewire\WithPagination;

class Laboratorium extends Component
{
    use WithPagination;

    public $form = [
        'medunit_cd' => 'LAB00',
        'cbg_tarif_tp' => 'CBG_TARIF_08',
        'root_st' => '0',
        'active_st' => '1',
        'medicalunit_cd' => '',
        'medicalunit_root' => '',
        'medicalunit_nm' => '',
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function mount()
    {
        $this->ambilGroup();
        // dd($this->ambilGroup());
    }

    public function ambilGroup()
    {
        return TrxUnitmedisItem::where('root_st', 1)->get()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = TrxUnitmedisItem::find($a)->only(['medunit_cd', 'cbg_tarif_tp', 'root_st', 'active_st', 'medicalunit_cd', 'medicalunit_root', 'medicalunit_nm']);
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
            'form.medicalunit_cd' => 'required',
            'form.medicalunit_nm' => 'required',
        ]);

        if ($this->form['medicalunit_root'] == '') {
            $this->form['active_st'] = '1';
        } else {
            $this->form['active_st'] = '0';
        }

        TrxUnitmedisItem::create($this->form);

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
        TrxUnitmedisItem::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        if ($this->form['medicalunit_root'] == '') {
            $this->form['active_st'] = '1';
        } else {
            $this->form['active_st'] = '0';
        }

        TrxUnitmedisItem::find($this->form['medicalunit_cd'])->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxUnitmedisItem::cari($this->cari)->where('medunit_cd', 'LAB00')->paginate(10);
        return view('livewire.pages.master.data-medis.instalasi-medis.laboratorium', [
            'post' => $data,
            'listGroup' => $this->ambilGroup()
        ]);
    }
}
