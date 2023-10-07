<?php

namespace App\Livewire\Pages\Master\DataMedis;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxJadwal;
use App\Models\His\TrxUnitMedis;

class ListJadwalPraktek extends Component
{
    use WithPagination;

    public $searchDr, $searchPoli, $searchHari, $poli, $hari;

    public function mount($id = "")
    {
        $this->poli = TrxUnitMedis::get()->toArray();
        $this->hari = get_code('DAY_TP');
    }


    public function render()
    {
        $data = TrxJadwal::with(['hari', 'poli', 'dokter'])
            ->caripoli($this->searchPoli)
            ->caridokter($this->searchDr)
            ->carihari($this->searchHari)
            // ->orderBy('')
            ->paginate(10);
        return view('livewire.pages.master.data-medis.list-jadwal-praktek', [
            'post' => $data
        ]);
    }
}