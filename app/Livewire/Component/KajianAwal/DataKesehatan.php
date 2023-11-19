<?php

namespace App\Livewire\Component\KajianAwal;

use Livewire\Component;
use App\Models\His\ComCode;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;

class DataKesehatan extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd;

    public $form = [
        'subyektif_tp' => null,
        'r_alergi_obat' => null,
        'r_alergi_obat_ket' => null,
        'r_alergi_makanan' => null,
        'r_alergi_makanan_ket' => null,
        'r_penyakit_dahulu' => null,
        'r_penyakit_dahulu_ket' => null,
        'r_penyakit_keluarga' => null,
        'r_penyakit_keluarga_ket' => null,
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
        return view('livewire.component.kajian-awal.data-kesehatan', [
            'listSubyektif' => $this->ambilSubyektif()
        ]);
    }
}
