<?php

namespace App\Livewire\Demo\Master;

use App\Models\Demo\Layanan as DemoLayanan;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class Layanan extends Component
{
    use WithPagination;

    use WithFileUploads;

    public $idHapus, $edit = false, $idnya, $path;

    public $form = [
        'name' => null,
        'description' => null,
        'harga' => null,
        'path' => null,
    ];

    public function mount()
    {
        //
    }

    public function getEdit($a)
    {
        $this->form = DemoLayanan::find($a)->only(['name', 'description', 'harga', 'path']);
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
        $this->validate([
            'path' => 'image|max:2000', // 2MB Max
        ]);

        $this->path = $this->path->store('public/photos');
        dd($this->path);

        DemoLayanan::create($this->form);
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
        DemoLayanan::destroy($this->idHapus);
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
        DemoLayanan::find($this->idHapus)->update($this->form);
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
        $data = DemoLayanan::paginate(10);

        return view('livewire.demo.master.layanan', [
            'post' => $data,
        ]);
    }
}
