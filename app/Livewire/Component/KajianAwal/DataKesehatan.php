<?php

namespace App\Livewire\Component\KajianAwal;

use App\Models\DataKesehatan as ModelsDataKesehatan;
use Livewire\Component;
use App\Models\His\ComCode;
use Livewire\WithPagination;
use Illuminate\Support\Arr;


class DataKesehatan extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd;

    public $form = [
        'pasien_cd' => null,
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
        $data_kesehatan = ModelsDataKesehatan::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        )->toArray();

        $this->form = $data_kesehatan;
        $this->ambilSubyektif();
    }

    public function ambilSubyektif()
    {
        return ComCode::where('code_group', 'SUBYEKTIF_TP')->get()->toArray();
    }

    public function updated($property)
    {

        if ($property === 'form.r_alergi_obat') {
            if ($this->form['r_alergi_obat'] == 0) {
                $this->form['r_alergi_obat_ket'] = null;
            }
        }

        if ($property === 'form.r_alergi_makanan') {
            if ($this->form['r_alergi_makanan'] == 0) {
                $this->form['r_alergi_makanan_ket'] = null;
            }
        }

        if ($property === 'form.r_penyakit_dahulu') {
            if ($this->form['r_penyakit_dahulu'] == 0) {
                $this->form['r_penyakit_dahulu_ket'] = null;
            }
        }

        if ($property === 'form.r_penyakit_keluarga') {
            if ($this->form['r_penyakit_keluarga'] == 0) {
                $this->form['r_penyakit_keluarga_ket'] = null;
            }
        }
    }

    public function save()
    {
        $this->form['pasien_cd'] = $this->pasiencd;

        ModelsDataKesehatan::where('medical_cd', $this->medicalcd)->update(Arr::except($this->form, ['created_at', 'updated_at']));

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
