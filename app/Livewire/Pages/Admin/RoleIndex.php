<?php

namespace App\Livewire\Pages\Admin;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class RoleIndex extends Component
{

    use WithPagination;

    public function render()
    {
        $data = Role::paginate(10);

        return view('livewire.pages.admin.role-index', [
            'post' => $data,
        ]);
    }
}
