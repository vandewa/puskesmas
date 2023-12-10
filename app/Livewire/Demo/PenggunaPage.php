<?php

namespace App\Livewire\Demo;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class PenggunaPage extends Component
{
    use WithPagination;
    public $cari;
    public function render()
    {
        $data = User::cari($this->cari)->whereHas('roles', function($a){
            $a->where('name', 'user');
        })->paginate(10);
        return view('livewire.demo.pengguna-page',  [
            'posts' => $data
        ]);

    }
}
