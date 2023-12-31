<?php

namespace App\Livewire\Component\KajianAwal;

use Livewire\Component;
use App\Models\His\ComCode;
use App\Models\RiwayatPsikologis as ModelsRiwayatPsikologis;
use Illuminate\Support\Arr;


class RiwayatPsikologis extends Component
{

    public $medicalcd, $pasiencd;

    public $form = [
        'pasien_cd' => null,
        'bicara_tp' => null,
        'komunikasi_tp' => null,
        'emosional_st' => null,
        'sosiologi_tp' => null,
        'riwayat_kb_tp' => null,
        'kehamilan_tp' => null,
    ];

    public function mount()
    {
        $riwayat = ModelsRiwayatPsikologis::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        )->toArray();

        $this->form = $riwayat;
        $this->ambilBicara();
    }

    public function ambilBicara()
    {
        return ComCode::where('code_group', 'BICARA_TP')->get()->toArray();
    }
    public function ambilKomunikasi()
    {
        return ComCode::where('code_group', 'KOMUNIKASI_TP')->get()->toArray();
    }
    public function ambilEmosional()
    {
        return ComCode::where('code_group', 'EMOSIONAL_ST')->get()->toArray();
    }
    public function ambilSosiologi()
    {
        return ComCode::where('code_group', 'SOSIOLOGI_TP')->get()->toArray();
    }
    public function ambilRiwayatKB()
    {
        return ComCode::where('code_group', 'RIWAYAT_KB_TP')->get()->toArray();
    }
    public function ambilKehamilan()
    {
        return ComCode::where('code_group', 'KEHAMILAN_TP')->get()->toArray();
    }

    public function save()
    {
        ModelsRiwayatPsikologis::where('medical_cd', $this->medicalcd)->update(Arr::except($this->form, ['created_at', 'updated_at']));

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil disimpan.',
            icon: 'success',
          })
        JS);
    }

    public function render()
    {
        return view('livewire.component.kajian-awal.riwayat-psikologis', [
            'listBicara' => $this->ambilBicara(),
            'listKomunikasi' => $this->ambilBicara(),
            'listEmosional' => $this->ambilEmosional(),
            'listSosiologi' => $this->ambilSosiologi(),
            'listRiwayatKB' => $this->ambilRiwayatKB(),
            'listKehamilan' => $this->ambilKehamilan()
        ]);
    }
}
