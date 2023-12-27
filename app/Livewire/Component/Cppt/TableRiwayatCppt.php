<?php

namespace App\Livewire\Component\Cppt;

use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxResepData;
use App\Models\TrxCppt;
use App\Models\TrxDocument;
use Livewire\WithPagination;
use Livewire\Attributes\On;

use Livewire\Component;

class TableRiwayatCppt extends Component
{
    public $medicalcd, $pasiencd, $cari, $idHapus;
    use WithPagination;

    #[On('refresh')]
    public function racik()
    {

    }

    public function confirmHapus($id) {
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

    public function hapus()  {
        TrxCppt::find($this->idHapus)->delete();
    }
    public function render()
    {
        $data = TrxCppt::where('medical_cd', '<>' ,$this->medicalcd)
        ->where('pasien_cd', $this->pasiencd)
        ->paginate(10);
        return view('livewire..component.cppt.table-cppt', [
            'posts' => $data
        ]);
    }
}
