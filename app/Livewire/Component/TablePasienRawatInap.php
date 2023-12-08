<?php

namespace App\Livewire\Component;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Reactive;

class TablePasienRawatInap extends Component
{
    use WithPagination;

    #[Reactive]
    public $rm;

    #[Reactive]
    public $poliklinik;

    #[Reactive]
    public $tanggal;

    #[Reactive]
    public $dokter;

    #[Reactive]
    public $kelas;

    #[Reactive]
    public $bangsal;


    public $url;



    public function render()
    {
        $data = TrxMedical::with(['poli', 'dokter', 'pasien', 'jenisPasien', 'ruang'])->carirm($this->rm)
        // ->caripoliklinik($this->poliklinik)
        // ->caritanggal($this->tanggal)
        ->caridokter($this->dokter)
        ->carikelas($this->kelas)
        ->caribangsal($this->bangsal)
        ->caridokter($this->dokter)
        ->where('medical_tp', 'MEDICAL_TP_02')
        ->where('medical_trx_st', 'MEDICAL_TRX_ST_0')
        ->orderBy('medunit_cd', 'asc')
        ->paginate(10);
        return view('livewire.component.table-pasien-rawat-inap', [
            'posts' => $data
        ]);
    }
}
