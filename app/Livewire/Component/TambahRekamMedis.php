<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\TrxIcd;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\His\TrxMedicalRecord;

class TambahRekamMedis extends Component
{

    use WithPagination;
    public $form = [
        'pasien_cd' => '',
        'icd_cd' => '',
        'medical_cd' => '',
        'dr_cd' => '',
        'datetime_record' => '',
        'anamnesa' => '',
        'medical_data' => '',
        'rm_tp' => '',
        'case_tp' => '',
        'pemeriksaan_fisik' => '',
        'pemeriksaan_penunjang' => '',
        'medical_note' => '',
    ];
    public $cari, $edit = false, $dokter, $diagnosa, $kasus, $icd;
    public $idHapus, $idnya;


    public function mount($id = "")
    {
        $this->dokter = TrxMedicalRecord::get()->toArray();
        $this->diagnosa = get_code('RM_TP');
        $this->kasus = get_code('CASE_TP');
    }

    #[On('pilih-diagnosa')]
    public function pilihDiagnosa($id = "")
    {
        $this->icd = TrxIcd::find($id);
    }


    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }
        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
        $this->reset();
    }

    public function store()
    {
        $this->validate([
            'form.icd_cd' => 'required',
            'form.medical_cd' => 'required',
            'form.dr_cd' => 'required',
            'form.datetime_record' => 'required',
            'form.anamnesa' => 'required',
            'form.medical_data' => 'required',
            'form.rm_tp' => 'required',
            'form.case_tp' => 'required',
            'form.pemeriksaan_fisik' => 'required',
            'form.pemeriksaan_penunjang' => 'required',
        ]);

        TrxMedicalRecord::create($this->form);
        // $this->redirect(route('master.jadwal-praktek.index'));
    }


    public function storeUpdate()
    {
        TrxMedicalRecord::find($this->form['seq_no'])->update($this->form);
        $this->reset();
        $this->edit = false;
        // $this->redirect(route('master.jadwal-praktek.index'));
    }

    public function render()
    {
        return view('livewire.component.tambah-rekam-medis');
    }
}