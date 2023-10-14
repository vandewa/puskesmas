<?php

namespace App\Livewire\Pages\Master\DataInventori;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\PoPrincipal;

class ListPrincipal extends Component
{
    use WithPagination;

    public $idHapus, $cari;

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
        PoPrincipal::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function render()
    {
        $data = PoPrincipal::paginate(10);
        return view('livewire.pages.master.data-inventori.list-principal', [
            'post' => $data
        ]);
    }
}