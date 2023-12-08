<?php

namespace App\Livewire\Component\KajianAwal\PertumbuhanPerkembangan;

use Livewire\Component;
use App\Models\His\ComCode;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;

class Pertumbuhan extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd;

    public $form = [
        'lahir_usia' => null,
        'tempat' => null,
        'penolong' => null,
        'anak_ke' => null,
        'bb' => null,
        'pb' => null,
        'kelainan_st' => null,
        'kelainan_keterangan' => null,
        'nutrisi' => null,
    ];

    public function mount()
    {
        // $this->no_rm = TrxPasien::where('pasien_cd', $this->pasiencd)->first()->no_rm;
        // $this->pasien_nm = TrxPasien::where('pasien_cd', $this->pasiencd)->first()->pasien_nm;

        $this->ambilSubyektif();
    }

    public function ambilSubyektif()
    {
        return ComCode::where('code_group', 'SUBYEKTIF_TP')->get()->toArray();
    }

    public function save()
    {
        TrxMedical::find($this->medicalcd)->update($this->form);
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
        return view('livewire.component.kajian-awal.pertumbuhan-perkembangan.pertumbuhan', [
            'listSubyektif' => $this->ambilSubyektif()
        ]);
    }
}
