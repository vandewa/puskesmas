<?php

namespace App\Livewire\Component\Resep;

use App\Models\His\TrxResepData;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class TableResep extends Component
{
    public $medicalcd, $pasiencd, $cari;
    use WithPagination;

    #[On('refresh')]
    public function racik()
    {

    }

    public function edit($id) {
        $this->dispatch('edit-resep', $id);
        $this->js(<<<'JS'
        setTimeout(() => {
           $('#tombol-tambah-resep').trigger('click');
       }, 300);
       JS);
    }
    public function render()
    {
        $data = TrxResepData::with(['resepHeader.dokter'])->cari($this->cari)->whereHas('resepHeader',  function($a) {
            $a->where('medical_cd', $this->medicalcd);
        })->paginate(10);
        return view('livewire.component.resep.table-resep', [
            'posts' => $data
        ]);
    }
}
