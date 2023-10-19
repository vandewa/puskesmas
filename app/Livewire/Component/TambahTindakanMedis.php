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
    public $medicalcd, $tindakan, $tanggal, $jam, $dokter, $dr_cd;

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
        $this->form['treatment_cd'] = $this->tindakan->treatment_cd;
    }

    public function mount()
    {
        $this->ambilPoli();
        $this->tanggal = date('Y-m-d');
        $this->jam = date('h:i');
        $this->form['dr_cd'] = TrxMedical::where('medical_cd', $this->medicalcd)->first()->dr_cd;
        $this->dokter = TrxDokter::all()->toArray();
    }

    public function ambilPoli()
    {
        return TrxUnitMedis::all()->toArray();
    }

    public function save()
    {
        $this->store();
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {

        $this->form['datetime_trx'] = $this->tanggal . ' ' . $this->jam;

        $this->validate([
            'form.treatment_cd' => 'required',
            'form.quantity' => 'required',
            'form.diskon_percent' => 'required',
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
        ]);
    }
}