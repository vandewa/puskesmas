<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Role as ModelsRole;
use Livewire\Component;
use App\Models\Permission;
use Livewire\WithPagination;

class Role extends Component
{

    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $permission;

    public $form = [
        'name' => null,
        'description' => null,
        'display_name' => null,
    ];

    public function mount($id = '')
    {
        $this->permission = Permission::all();
    }

    public function getEdit($a)
    {
        $this->form = ModelsRole::find($a)->only(['name', 'description', 'display_name']);
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
        ModelsRole::create($this->form);
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
        ModelsRole::destroy($this->idHapus);
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
        ModelsRole::find($this->idHapus)->update($this->form);
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
        $data = ModelsRole::paginate(10);

        return view('livewire.pages.admin.role', [
            'post' => $data,
        ]);
    }
}
