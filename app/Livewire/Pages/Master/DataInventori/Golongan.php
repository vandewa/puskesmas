<?php

namespace App\Livewire\Pages\Master\DataInventori;

use App\Models\His\InvItemGolongan;
use Livewire\Component;
use Livewire\WithPagination;

class Golongan extends Component
{
    use WithPagination;

    public $form = [
        'golongan_cd' => null,
        'golongan_nm' => null,
        'root_cd' => null,
        'level_no' => null,
    ];
    public $cari, $edit = false;
    public $idHapus;

    public function mount()
    {
        $this->ambilGolongan();
    }

    public function ambilGolongan()
    {
        return InvItemGolongan::where('level_no', 1)->get()->toArray();
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
        } else {
            $this->form['level_no'] = null;
        }

        InvItemGolongan::create([
            'golongan_cd' => $this->form['golongan_cd'],
            'golongan_nm' => $this->form['golongan_nm'],
            'root_cd' => $this->form['root_cd'],
            'level_no' => $this->form['level_no'],
        ]);

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
            'post' => $data,
            'root' => $this->ambilGolongan()
        ]);
    }
}