<?php

namespace App\Livewire\Component\KajianLanjutan;

use App\Models\His\TrxMedical;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\General as ModelTandaVital;
use Illuminate\Support\Arr;

class GeneralComponent extends Component
{
    use WithPagination;
    public $tab = 1;
    public $edit;
    public $delete;
    public $form = [
        'kepala' => null,
        'mata' => null,
        'teling' => null,
        'leher' => null,
        'dada' => null,
        'abdomen' => null,
        'extremistis' => null,
    ];

    public $medicalcd;
    public $medik;

    public function mount()  {
        $this->medik = TrxMedical::find($this->medicalcd);
    }
    public function clear() {
        $this->form = [
            'kepala' => null,
            'mata' => null,
            'teling' => null,
            'leher' => null,
            'dada' => null,
            'abdomen' => null,
            'extremistis' => null,
        ];

        $this->edit = null;
        $this->delete = null;
    }

    public function confirmDelete($id) {
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

    public function hapus() {
        // dd("as");
        ModelTandaVital::where('id',$this->delete)->delete();
    }

    public function rubah($id)  {
        $this->edit = $id;
        $data = ModelTandaVital::find($id);
        $this->form = Arr::except($data->toArray(), ['created_at', 'updated_at', 'id']);
    }

    public function ubahTab($id)
    {
        $this->tab = $id;
    }

    public function save() {

        if($this->edit){
            ModelTandaVital::where('id', $this->edit)->update($this->form);
            $this->js(<<<'JS'
                Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil diubah!",
                icon: "success"
                });
            JS);
        }else {
            ModelTandaVital::create($this->form +
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
    public function render()
    {
        $data = ModelTandaVital::where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd', $this->medik->medical_cd)
        ->orderBy('created_at', 'desc')->paginate(10);
        $riwayat = ModelTandaVital::where('pasien_cd', $this->medik->pasien_cd)->where('medical_cd','<>', $this->medik->medical_cd)
        ->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.component.kajian-lanjutan.general-component',[
            'posts' => $data,
            'riwayat' => $riwayat
        ]);
    }
}
