<?php

namespace App\Livewire\Pages\Master\DataMedis;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxUnitMedis;

class ListJadwalPraktek extends Component
{
    use WithPagination;

    public $searchDr, $searchPoli, $searchHari, $poli, $hari, $idHapus;

    public function mount()
    {
        $this->poli = TrxUnitMedis::get()->toArray();
        $this->hari = get_code('DAY_TP');
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
        TrxJadwal::destroy($this->idHapus);
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil dihapus");
    }

    public function render()
    {
        $data = TrxJadwal::with(['hari', 'poli', 'dokter'])
            ->caripoli($this->searchPoli)
            ->caridokter($this->searchDr)
            ->carihari($this->searchHari)
            ->orderBy('day_tp', 'asc')
            ->paginate(10);
        return view('livewire.pages.master.data-medis.list-jadwal-praktek', [
            'post' => $data
        ]);
    }
}