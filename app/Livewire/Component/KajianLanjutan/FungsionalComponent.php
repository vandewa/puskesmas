<?php

namespace App\Livewire\Component\KajianLanjutan;

use Livewire\Component;
use App\Models\His\ComCode;
use Illuminate\Support\Arr;
use Livewire\WithPagination;
use App\Models\His\TrxMedical;
use App\Models\Fungsional as ModelsFungsional;

class FungsionalComponent extends Component
{
    use WithPagination;
    public $tab = 1;
    public $edit;
    public $delete;
    public $form = [
        'kognitif_tp' => null,
        'penglihatan_tp' => null,
        'pendengaran_tp' => null,
        'aktifitas_tp' => null,
        'berjalan_tp' => null,
    ];

    public $medicalcd;
    public $medik;

    public function mount()
    {
        $this->medik = TrxMedical::find($this->medicalcd);

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

    public function clear()
    {
        $this->form = [
            'kognitif_tp' => null,
            'penglihatan_tp' => null,
            'pendengaran_tp' => null,
            'aktifitas_tp' => null,
            'berjalan_tp' => null,
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
        // dd("as");
        ModelsFungsional::where('id', $this->delete)->delete();
    }

    public function rubah($id)
    {
        $this->edit = $id;
        $data = ModelsFungsional::find($id);
        $this->form = Arr::except($data->toArray(), ['created_at', 'updated_at', 'id']);
    }

    public function save()
    {

        if ($this->edit) {
            ModelsFungsional::where('id', $this->edit)->update($this->form);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil diubah!",
                icon: "success"
                });
            JS);
        } else {
            ModelsFungsional::create($this->form +
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
        $data = ModelsFungsional::with(['kognitif', 'penglihatan', 'pendengaran', 'aktifitas', 'berjalan'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', $this->medik->medical_cd)
            ->orderBy('created_at', 'desc')->paginate(10);
        $riwayat = ModelsFungsional::with(['kognitif', 'penglihatan', 'pendengaran', 'aktifitas', 'berjalan'])->where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', '<>', $this->medik->medical_cd)
            ->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.component.kajian-lanjutan.fungsional-component', [
            'posts' => $data,
            'riwayat' => $riwayat,
            'listKognitif' => $this->ambilKognitif(),
            'listPenglihatan' => $this->ambilPenglihatan(),
            'listPendengaran' => $this->ambilPendengaran(),
            'listAktifitas' => $this->ambilAktifitas(),
            'listBerjalan' => $this->ambilBerjalan(),
        ]);
    }
}
