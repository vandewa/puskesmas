<?php

namespace App\Livewire\Pages;

use App\Models\His\ComCode;
use App\Models\His\TrxBangsal;
use App\Models\His\TrxDokter;
use App\Models\His\TrxKelas;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;

class TransaksiListRekamMedis extends Component
{
    use WithPagination;
    public $rm;
    public $tanggal;
    public $bangsal;
    public $kelas;
    public $listKelas;
    public $listBangsal;
    public $url = 'transaksi.rawat-inap.data-transaksi';
    public $listJenisRawat;
    public $jenisRawat;
    public $poli;
    public $listPoli;

    public function mount($url = "")
    {
        // $this->tanggal = date('Y-m-d');
        $this->listKelas = TrxKelas::all()->toArray();
        $this->listBangsal = TrxBangsal::all()->toArray();
        $this->listJenisRawat = ComCode::where('code_group', 'MEDICAL_TP')->get();
        $this->listPoli = TrxUnitMedis::where('medicalunit_tp', 'MEDICALUNIT_TP_1')->get();


        if ($url != "") {
            $this->url = $url;
        }
    }
    public function render()
    {
        return view('livewire.pages.transaksi-list-rekam-medis');
    }
}
