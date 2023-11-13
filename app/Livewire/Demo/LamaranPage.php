<?php

namespace App\Livewire\Demo;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Demo\Lamaran;

class LamaranPage extends Component
{
    use WithPagination;
    public function render()
    {
        $data = Lamaran::paginate(10);
        return view('livewire.demo.lamaran-page', [
            'posts' => $data
        ]);
    }
}
