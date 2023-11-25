<?php

namespace App\Livewire\Demo;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PenggunaPage extends Component
{
    use WithPagination;
    public function render()
    {
        $data = User::paginate(10);
        return view('livewire.demo.pengguna-page',  [
            'posts' => $data
        ]);

    }
}
