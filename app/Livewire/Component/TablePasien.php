<?php

namespace App\Livewire\Component;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Reactive;

class TablePasien extends Component
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
    public $tipePasien = 'MEDICAL_TP_01';


    public function render()
    {
        $data = TrxMedical::with(['poli', 'dokter', 'pasien', 'jenisPasien', 'medicalRuang'])->carirm($this->rm)
            ->caripoliklinik($this->poliklinik)
            ->caritanggal($this->tanggal)
            ->caridokter($this->dokter)
            ->carikelas($this->kelas)
            ->caribangsal($this->bangsal)
            ->where('medical_tp', 'MEDICAL_TP_01')
            ->where('medical_trx_st', 'MEDICAL_TRX_ST_0')
            ->orderBy('medunit_cd', 'asc')
            ->paginate(10);

        // dd($data);
        return view('livewire.component.table-pasien', [
            'posts' => $data,
            'tipePasien' => $this->tipePasien
        ]);
    }
}
