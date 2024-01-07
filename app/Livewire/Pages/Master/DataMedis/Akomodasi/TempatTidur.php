<?php

namespace App\Livewire\Pages\Master\DataMedis\Akomodasi;

use Livewire\Component;
use App\Models\His\TrxKelas;
use App\Models\His\TrxRuang;
use Livewire\WithPagination;
use App\Models\His\TrxBangsal;
use App\Models\His\TrxKamar;

class TempatTidur extends Component
{
    use WithPagination;

    public $form = [
        'ruang_cd' => '',
        'ruang_nm' => '',
        'kelas_cd' => '',
        'bangsal_cd' => '',
        'kamar_cd' => '',
    ];
    public $cari, $edit = false, $idedit;

    public $idHapus;

    public function mount()
    {
        $this->ambilBangsal();
        $this->ambilKamar();
        $this->ambilKelas();
    }

    public function ambilKelas()
    {
        return TrxKelas::all()->toArray();
    }
    public function ambilBangsal()
    {
        return TrxBangsal::all()->toArray();
    }
    public function ambilKamar()
    {
        return TrxKamar::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = TrxRuang::find($a)->only(['ruang_cd', 'ruang_nm', 'kelas_cd', 'bangsal_cd', 'kamar_cd']);
        $this->edit = true;
        $this->idedit = $this->form['ruang_cd'];
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
            'form.ruang_cd' => 'required',
            'form.ruang_nm' => 'required',
            'form.kelas_cd' => 'required',
            'form.bangsal_cd' => 'required',
            'form.kamar_cd' => 'required',
        ]);

        TrxRuang::create($this->form);
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
        TrxRuang::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function storeUpdate()
    {
        TrxRuang::find($this->idedit)->update($this->form);
        $this->reset();
        $this->edit = false;
        $this->idedit = null;

    }

    public function render()
    {
        $data = TrxRuang::with(['kamar', 'bangsal', 'kelas'])->cari($this->cari)->paginate(10);
        return view('livewire.pages.master.data-medis.akomodasi.tempat-tidur', [
            'post' => $data,
            'listKelas' => $this->ambilKelas(),
            'listBangsal' => $this->ambilBangsal(),
            'listKamar' => $this->ambilKamar(),
        ]);
    }
}
