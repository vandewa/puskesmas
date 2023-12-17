<?php

namespace App\Livewire\Component\KajianAwal\PertumbuhanPerkembangan;

use App\Models\Pertumbuhan as ModelsPertumbuhan;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Arr;


class Pertumbuhan extends Component
{

    use WithPagination;

    public $medicalcd, $pasiencd;
    public $updateTypes = [];

    public $form = [
        'lahir' => null,
        'tempat' => null,
        'penolong' => null,
        'anak_ke' => null,
        'bb' => null,
        'pb' => null,
        'kelainan' => null,
        'kelainan_keterangan' => null,
        'nutrisi' => null,
        'balik_badan' => null,
        'duduk' => null,
        'berdiri' => null,
        'berjalan' => null,
        'mengocel' => null,
        'berbicara' => null,
        'r_tumbuh_kembang' => null,
        'r_imunisasi' => [],
    ];

    public function mount()
    {
        $pertumbuhan = ModelsPertumbuhan::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        )->toArray();

        $pertumbuhan2 = ModelsPertumbuhan::firstOrCreate(
            ['medical_cd' => $this->medicalcd],
        );

        $this->form = $pertumbuhan;

        if ($pertumbuhan2['r_imunisasi'] != null) {
            $this->updateTypes = json_decode($pertumbuhan2['r_imunisasi'], true);
        }

    }

    public function save()
    {
        $this->form['pasien_cd'] = $this->pasiencd;
        $this->form['r_imunisasi'] = $this->updateTypes;

        ModelsPertumbuhan::where('medical_cd', $this->medicalcd)->update(Arr::except($this->form, ['created_at', 'updated_at']));

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

        ]);
    }
}
