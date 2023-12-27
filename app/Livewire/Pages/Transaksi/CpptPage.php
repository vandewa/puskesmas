<?php

namespace App\Livewire\Pages\Transaksi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxParamedis;
use App\Models\His\TrxDokter;
use App\Models\TrxCppt;

class CpptPage extends Component
{
    use WithPagination;

    public $edit = false;
    public $medicalcd;
    public $form = [
        'medical_cd' => null,
        'dr_cd' => null,
        'paramedis_cd' => null,
        'subject' => null,
        'objective' => null,
        'assesment' => null,
        'plan' => null,
        'transaction_date' => null,
        'pasien_cd' => null,
    ];

    public $medik;

    public function mount($id)
    {
        $this->medicalcd = $id;
        $this->medik = TrxMedical::find($id);
        $this->form['medical_cd'] = $this->medik->medical_cd;
        $this->form['pasien_cd'] = $this->medik->pasien_cd;
        $this->form['transaction_date'] = date('Y-mp-d');
    }

    public function clear()  {
        $this->form = [
            'dr_cd' => null,
            'paramedis_cd' => null,
            'subject' => null,
            'objective' => null,
            'assesment' => null,
            'plan' => null,
            'transaction_date' => null,
        ];

        $this->edit = false;
    }

    public function save() {
        TrxCppt::create($this->form);
        $this->dispatch('refresh')->to(CpptPage::class);
    }

    public function render()
    {
        $dokter = TrxDokter::all();
        $paramedis = TrxParamedis::all();
        return view('livewire.pages.transaksi.cppt-page', [
            'dokter' => $dokter,
            'paramedis' => $paramedis
        ]);
    }
}
