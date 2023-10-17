<?php

namespace App\Livewire\Pages\Master\DataMedis\Tarif;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\His\TrxKelas;
use Livewire\WithPagination;
use App\Models\His\ComAccount;
use App\Models\His\TrxInsurance;
use App\Models\His\TrxTarifGeneral;

class General extends Component
{
    use WithPagination;

    public $form = [
        'tarif_nm' => '',
        'tarif' => '0',
        'kelas_cd' => '',
        'insurance_cd' => '',
        'account_cd' => '',
    ];
    public $cari, $edit = false, $account;
    public $idHapus;

    public function mount()
    {
        $this->ambilKelas();
        $this->ambilAsuransi();
    }

    #[On('pilih-account')]
    public function pilihAccount($id = "")
    {
        $this->account = ComAccount::find($id);
        $this->form['account_cd'] = $this->account->account_cd;
    }

    public function ambilKelas()
    {
        return TrxKelas::all()->toArray();
    }

    public function ambilAsuransi()
    {
        return TrxInsurance::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = TrxTarifGeneral::find($a)->only(['tarif_nm', 'tarif', 'kelas_cd', 'insurance_cd', 'account_cd']);
        $this->idHapus = $a;
        $this->edit = true;
        $this->pilihAccount($this->form['account_cd']);
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
            'form.tarif_nm' => 'required',
        ]);

        TrxTarifGeneral::create($this->form);
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
        TrxTarifGeneral::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxTarifGeneral::find($this->idHapus)->update($this->form);
        $this->reset();
        $this->edit = false;
    }

    public function render()
    {
        $data = TrxTarifGeneral::cari($this->cari)->orderBy('updated_at', 'desc')->paginate(10);
        return view('livewire.pages.master.data-medis.tarif.general', [
            'post' => $data,
            'listKelas' => $this->ambilKelas(),
            'listAsuransi' => $this->ambilAsuransi(),
        ]);
    }
}