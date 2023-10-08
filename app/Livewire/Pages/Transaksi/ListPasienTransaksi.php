<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;

class ListPasienTransaksi extends Component
{
    use  WithPagination;
    public $rm;
    public $poliklinik;
    public $tanggal;
    public $poli;

    public function mount(){
        $this->poli = TrxUnitMedis::where('medicalunit_tp', 'MEDICALUNIT_TP_1')->get()->toArray();
    }
    public function render()
    {

        return view('livewire.pages.transaksi.list-pasien-transaksi');
    }
}
