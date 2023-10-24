<?php

namespace App\Livewire\Pages\Transaksi;

use App\Models\His\TrxBangsal;
use App\Models\His\TrxDokter;
use App\Models\His\TrxKelas;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;

class ListPasienTransaksiRawatInap extends Component
{
    use WithPagination;
    public $rm;
    public $tanggal;
    public $bangsal;
    public $kelas;
    public $listKelas;
    public $listBangsal;
    public $url = 'transaksi.rawat-inap.data-transaksi';

    public function mount($url = "")
    {
        $this->tanggal = date('Y-m-d');
        $this->listKelas = TrxKelas::all()->toArray();
        $this->listBangsal = TrxBangsal::all()->toArray();


        if ($url != "") {
            $this->url = $url;
        }
    }
    public function render()
    {
        return view('livewire.pages.transaksi.list-pasien-transaksi-rawat-inap');
    }
}
