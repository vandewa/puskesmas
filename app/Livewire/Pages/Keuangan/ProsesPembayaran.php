<?php

namespace App\Livewire\Pages\Keuangan;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Kusus\PrerhitunganBiaya;
use App\Models\His\TrxMedicalSettlement;

class ProsesPembayaran extends Component
{
    use WithPagination;

    public $medicalcd;

    public $medik;

    public function mount($id)
    {
        $this->medicalcd = $id;

        $this->medik = TrxMedical::find($id);
    }

    public function confirmHitung()
    {
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yaking akan melakukan perhitungan?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.hitung()
            }
        })
        JS);

    }

    public function hitung() {
        $data = new PrerhitunganBiaya;
        $data->hitungBiaya($this->medicalcd);
    }

    public function render()
    {
        $data = TrxMedicalSettlement::with(['account'])->where('medical_cd', $this->medicalcd)->paginate(10);
        return view('livewire.pages.keuangan.proses-pembayaran', [
            'posts' => $data
        ]);
    }
}
