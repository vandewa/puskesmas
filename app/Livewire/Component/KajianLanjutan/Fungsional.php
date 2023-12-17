<?php

namespace App\Livewire\Component\KajianLanjutan;

use App\Models\Fungsional as ModelsFungsional;
use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;


class Fungsional extends Component
{

    public $medicalcd, $pasiencd;

    public $form = [
        'pasien_cd' => null,
        'kognitif_tp' => null,
        'penglihatan_tp' => null,
        'pendengaran_tp' => null,
        'aktifitas_tp' => null,
        'berjalan_tp' => null,
    ];

    public function mount()
    {
        $fungsional = ModelsFungsional::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        )->toArray();

        $this->form = $fungsional;
        $this->ambilKognitif();
        $this->ambilPenglihatan();
        $this->ambilPendengaran();
        $this->ambilAktifitas();
        $this->ambilBerjalan();
    }

    public function ambilKognitif()
    {
        return ComCode::where('code_group', 'KOGNITIF_TP')->get()->toArray();
    }
    public function ambilPenglihatan()
    {
        return ComCode::where('code_group', 'PENGLIHATAN_TP')->get()->toArray();
    }
    public function ambilPendengaran()
    {
        return ComCode::where('code_group', 'PENDENGARAN_TP')->get()->toArray();
    }
    public function ambilAktifitas()
    {
        return ComCode::where('code_group', 'AKTIFITAS_TP')->get()->toArray();
    }
    public function ambilBerjalan()
    {
        return ComCode::where('code_group', 'BERJALAN_TP')->get()->toArray();
    }


    public function save()
    {
        ModelsFungsional::where('medical_cd', $this->medicalcd)->update(Arr::except($this->form, ['created_at', 'updated_at']));

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
        return view('livewire.component.kajian-lanjutan.fungsional', [
            'listKognitif' => $this->ambilKognitif(),
            'listPenglihatan' => $this->ambilPenglihatan(),
            'listPendengaran' => $this->ambilPendengaran(),
            'listAktifitas' => $this->ambilAktifitas(),
            'listBerjalan' => $this->ambilBerjalan(),
        ]);
    }
}
