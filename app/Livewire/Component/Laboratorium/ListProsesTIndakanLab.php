<?php

namespace App\Livewire\Component\Laboratorium;

use App\Models\His\TrxMedicalUnit;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class ListProsesTIndakanLab extends Component
{
    use WithPagination;
    public $medicalcd;
    public $pasiencd, $idHapus;

    #[On('refresh')]
    public function refresh()
    {
        $this->resetPage();
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
        TrxMedicalUnit::destroy($this->idHapus);

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil dihapus.',
            icon: 'success',
          })
        JS);
    }
    public function render()
    {
        $item = TrxMedicalUnit::with(['drLab', 'tindakan', 'dokter'])
            ->whereHas('tindakan', function ($a) {
                $a->where('medunit_cd', 'LAB00');
            })->where('medical_cd', $this->medicalcd)
            ->paginate(10);
        return view('livewire.component.laboratorium.list-proses-tindakan-lab', [
            'posts' => $item
        ]);
    }
}
