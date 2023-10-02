<?php

namespace App\Livewire\Pages\Pasien;

use Livewire\Component;
use Livewire\WithPagination;

class ListPasien extends Component
{
    public function render()
    {
        return view('livewire.pages.pasien.list-pasien');
    }
}
