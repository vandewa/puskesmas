<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\His\TrxDokter;
use App\Models\His\TrxMedical;
use App\Models\His\TrxTindakan;
use App\Models\His\TrxUnitMedis;
use App\Models\His\TrxMedicalTindakan;
use App\Livewire\Component\TindakanMedis\TableTindakanMedis;
use App\Models\His\TrxBangsal;

class TambahTindakanMedis extends Component
{
    public $medicalcd, $tindakan, $tanggal, $jam, $dr_cd;

    public $form = [
        'medical_cd' => null,
        'treatment_cd' => null,
        'quantity' => 1,
        'diskon_percent' => null,
        'datetime_trx' => null,
        'dr_cd' => null,
        'medical_note' => null,
        'medunit_cd' => null,
        'payment_st' => 'PAYMENT_ST_0'
    ];

    #[On('pilih-master-tindakan-medis')]
    public function pilihMasterTindakanMedis($id = "")
    {
        $this->tindakan = TrxTindakan::find($id);
        $this->form['treatment_cd'] = $this->tindakan->treatment_cd;
    }

    public function mount()
    {
        $this->tanggal = date('Y-m-d');
        $this->jam = date('h:i');
        $this->form['dr_cd'] = TrxMedical::where('medical_cd', $this->medicalcd)->first()->dr_cd;
        $a = TrxMedical::with(['ruang'])->where('medical_cd', $this->medicalcd)->first();

        if($a->medical_tp == 'MEDICAL_TP_01'){
            $this->form['medunit_cd'] = $a->medunit_cd;
        }
        else {
            $this->form['medunit_cd'] = $a->ruang->bangsal_cd??"";
        }

    }

    public function save()
    {
        $this->store();
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->dispatch('refresh')->to(TableTindakanMedis::class);

    }

    public function store()
    {
        $this->form['datetime_trx'] = $this->tanggal . ' ' . $this->jam;

        $this->validate([
            'form.treatment_cd' => 'required',
            'form.quantity' => 'required',
            // 'form.diskon_percent' => 'required',
        ]);

        $this->form['medical_cd'] = $this->medicalcd;

        TrxMedicalTindakan::create($this->form);
        $this->form['form'] = null;
        $this->form['medical_note'] = null;
        $this->tindakan = null;
    }

    public function render()
    {
        $data = TrxMedical::with(['pasien', 'jenisRawat', 'dokter', 'poli'])->find($this->medicalcd);
        $bangsal = TrxBangsal::select('bangsal_cd', 'bangsal_nm');

        $poli = TrxUnitMedis::select('medunit_cd', 'medunit_nm')
        ->union($bangsal)->get();

        $dokter = TrxDokter::all()->toArray();


        return view('livewire.component.tambah-tindakan-medis', [
            'post' => $data,
            'poli' => $poli,
            'dokter' => $dokter,
        ]);
    }
}
