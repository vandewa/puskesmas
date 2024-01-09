<?php

namespace App\Livewire\Component\TindakanMedis;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\His\TrxMedicalTindakan;

class TableTindakanMedis extends Component
{
    public $medicalcd, $pasiencd, $cari, $delete;
    use WithPagination;

    #[On('refresh')]
    public function refresh()
    {
        $this->resetPage();
    }

    public function confirmDelete($id)
    {
        $this->delete = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menghapus data ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.hapus()
            }
        })
        JS);
    }

    public function hapus()
    {
        TrxMedicalTindakan::where('medical_tindakan_seqno', $this->delete)->delete();

        $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil dihapus!",
                icon: "success"
                });
            JS);
    }


    public function render()
    {
        $data = TrxMedicalTindakan::with(['dokter', 'tindakan', 'medical', 'bangsal'])->where('medical_cd', $this->medicalcd)->cari($this->cari)->paginate(10);
        return view('livewire.component.tindakan-medis.table-tindakan-medis', [
            'posts' => $data
        ]);
    }
}
