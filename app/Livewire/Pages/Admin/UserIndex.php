<?php

namespace App\Livewire\Pages\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{

    use WithPagination;
    public $cari;

    public function render()
    {
        $data = User::cari($this->cari)->whereHas('roles', function ($a) {
            $a->where('name', 'user');
        })->paginate(10);

        return view('livewire.pages.admin.user-index', [
            'posts' => $data
        ]);

    }
}
