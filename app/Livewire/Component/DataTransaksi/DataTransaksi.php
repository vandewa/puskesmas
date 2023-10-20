<?php

namespace App\Livewire\Component\DataTransaksi;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\His\TrxDokter;
use App\Models\His\TrxMedical;
use App\Models\His\TrxPasien;
use App\Models\His\TrxUnitMedis;

class DataTransaksi extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd, $poli, $dokter, $no_rm, $pasien_nm, $birth_date;

    public $form = [
        'datetime_in' => '',
        'dr_cd' => '',
        'medunit_cd' => '',
        'kronis' => null,
        'risiko_jatuh' => null,
        'catatan' => null,
        'alergi' => null,
    ];

    public function mount()
    {
        $this->no_rm = TrxPasien::where('pasien_cd', $this->pasiencd)->first()->no_rm;
        $this->pasien_nm = TrxPasien::where('pasien_cd', $this->pasiencd)->first()->pasien_nm;
        $this->birth_date = TrxPasien::where('pasien_cd', $this->pasiencd)->first()->birth_date;
        $this->form['dr_cd'] = TrxMedical::where('medical_cd', $this->medicalcd)->first()->dr_cd;
        $this->form['kronis'] = TrxMedical::where('medical_cd', $this->medicalcd)->first()->kronis;
        $this->form['datetime_in'] = date('Y-m-d', strtotime(TrxMedical::where('medical_cd', $this->medicalcd)->first()->datetime_in));
        $this->dokter = TrxDokter::all()->toArray();
        $this->form['medunit_cd'] = TrxMedical::where('medical_cd', $this->medicalcd)->first()->medunit_cd;
        $this->poli = TrxUnitMedis::all()->toArray();
    }

    public function save()
    {
        TrxMedical::find($this->medicalcd)->update($this->form);

        $this->dispatch('toast', type: 'bg-success', title: 'Berhasil!!', body: "Data berhasil disimpan");
    }


    public function render()
    {
        return view('livewire.component.data-transaksi.data-transaksi');
    }
}
