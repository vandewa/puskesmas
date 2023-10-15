<?php

namespace App\Livewire\Component;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\His\TrxDokter;
use App\Models\His\TrxMedical;
use App\Models\His\TrxTindakan;
use App\Models\His\TrxUnitMedis;
use App\Models\His\TrxMedicalTindakan;

class TambahTindakanMedis extends Component
{
    public $medicalcd, $tindakan;

    public $form = [
        'medical_cd' => '',
        'treatment_cd' => '',
        'quantity' => '',
        'diskon_percent' => '',
        'datetime_trx' => '',
        'dr_cd' => '',
        'medical_note' => '',
    ];

    #[On('pilih-master-tindakan-medis')]
    public function pilihMasterTindakanMedis($id = "")
    {
        $this->tindakan = TrxTindakan::find($id);
    }

    public function mount()
    {
        $this->ambilPoli();
        $this->ambilDokter();
    }

    public function ambilPoli()
    {
        return TrxUnitMedis::all()->toArray();
    }
    public function ambilDokter()
    {
        return TrxDokter::all()->toArray();
    }

    public function save()
    {
        $this->store();
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {

        $this->validate([
            'form.treatment_cd' => 'required',
            'form.quantity' => 'required',
            'form.diskon_percent' => 'required',
            'form.datetime_trx' => 'required',
            'form.dr_cd' => 'required',
        ]);

        $this->form['medical_cd'] = $this->medicalcd;

        TrxMedicalTindakan::create($this->form);

    }

    public function render()
    {
        $data = TrxMedical::with(['pasien', 'jenisRawat', 'dokter', 'poli'])->find($this->medicalcd);

        return view('livewire.component.tambah-tindakan-medis', [
            'post' => $data,
            'listPoli' => $this->ambilPoli(),
            'listDokter' => $this->ambilDokter(),
        ]);
    }
}