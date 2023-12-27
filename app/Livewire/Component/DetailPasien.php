<?php

namespace App\Livewire\Component;

use App\Models\DataKesehatan;
use App\Models\TandaVital;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalRecord;
use App\Models\His\TrxPasien;
use Livewire\Component;

class DetailPasien extends Component
{
    public $medicalcd;
    public function render()
    {
        $data = TrxMedical::with(['pasien', 'jenisRawat', 'dokter', 'poli', 'ruang'])->find($this->medicalcd);
        $hipertensi = TandaVital::where('pasien_cd', $data->pasien_cd)->where('sistol', '>=', 140)->where('diastol', '>=',90)->first();
        $alergi = DataKesehatan::where('pasien_cd',  $data->pasien_cd)
        ->where(function($a)use($data){
            $a->where('r_alergi_obat', '1')->orWhere('r_alergi_makanan', '1');
        })->first();
        $hiv = TrxMedicalRecord::where('pasien_cd', $data->pasien_cd)->where('icd_cd', 'ilike', '%B20%')->first();
        $tb = TrxMedicalRecord::where('pasien_cd', $data->pasien_cd)->where('icd_cd', 'ilike', '%A15%')->first();
        return view('livewire.component.detail-pasien', [
            'item' => $data,
            'hipertensi' => $hipertensi,
            'alergi' => $alergi,
            'hiv' => $hiv,
            'tb' => $tb
        ]);
    }
}
