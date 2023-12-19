<?php

namespace App\Livewire\Demo\Master;

use App\Models\Demo\Kategori as DemoKategori;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Kategori extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $idHapus, $edit = false, $idnya, $path;

    public $form = [
        'nama' => null,
    ];

    public function mount()
    {
        //
    }

    public function getEdit($a)
    {
        $this->form = DemoKategori::find($a)->only(['name', 'description', 'harga', 'path']);
        $this->idHapus = $a;
        $this->edit = true;
    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function store()
    {
        DemoKategori::create($this->form);
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
        DemoKategori::destroy($this->idHapus);
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function storeUpdate()
    {
        DemoKategori::find($this->idHapus)->update($this->form);
        $this->reset();
        $this->edit = false;
    }


    public function batal()
    {
        $this->edit = false;
        $this->reset();

    }

    public function render()
    {
        $data = DemoKategori::paginate(10);

        return view('livewire.demo.master.kategori', [
            'post' => $data,
        ]);
    }
}
