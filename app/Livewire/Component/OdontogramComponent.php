<?php

namespace App\Livewire\Component;

use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\His\TrxIcd;
use App\Models\Odontogram;
use Livewire\Attributes\On;

class OdontogramComponent extends Component
{
    use WithPagination;
    public $tab = 1;
    public $edit;
    public $delete;
    public $form = [
        'elemen_gigi' => null,
        'prosedur_tp' => null,
        'icd_cd' => null,
    ];

    public $medicalcd;
    public $medik;
    public $icd;

    public function mount()
    {
        $this->medik = TrxMedical::find($this->medicalcd);

        $this->ambilProsedur();
    }

    public function ambilProsedur()
    {
        return ComCode::where('code_group', 'PROSEDUR_TP')->get()->toArray();
    }

    #[On('pilih-diagnosa')]
    public function pilihDiagnosa($id = "")
    {
        $this->icd = TrxIcd::find($id);
        $this->form['icd_cd'] = $this->icd->icd_cd;
    }

    public function clear()
    {
        $this->form = [
            'elemen_gigi' => null,
            'prosedur_tp' => null,
        ];

        $this->edit = null;
        $this->delete = null;
    }

    public function confirmDelete($id)
    {
        $this->delete = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Anda yakin akan menghapus data ini?',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya!',
            cancelButtonText: 'Tidak'
          }).then((result) => {
            if (result.isConfirmed) {
              $wire.hapus()
            }
        })
        JS);
    }

    public function hapus()
    {
        Odontogram::where('id', $this->delete)->delete();
    }

    public function rubah($id)
    {
        $this->edit = $id;
        $data = Odontogram::find($id);
        $this->form = Arr::except($data->toArray(), ['created_at', 'updated_at', 'id']);
        $this->pilihDiagnosa($data->icd_cd);

    }

    public function save()
    {

        if ($this->edit) {
            Odontogram::where('id', $this->edit)->update($this->form);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil diubah!",
                icon: "success"
                });
            JS);
        } else {
            Odontogram::create($this->form +
                ['medical_cd' => $this->medik->medical_cd, 'pasien_cd' => $this->medik->pasien_cd]);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil disimpan!",
                icon: "success"
                });
            JS);
        }
        $this->clear();
    }
    public function ubahTab($id)
    {
        $this->tab = $id;
    }
    public function render()
    {
        $data = Odontogram::with(['diagnosa'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', $this->medik->medical_cd)->orderBy('created_at', 'desc')->paginate(10);
        $riwayat = Odontogram::with(['diagnosa'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', '<>', $this->medik->medical_cd)->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.component.odontogram-component', [
            'posts' => $data,
            'riwayat' => $riwayat,
            'listProsedur' => $this->ambilProsedur(),
        ]);
    }
}
