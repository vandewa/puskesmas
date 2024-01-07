<?php

namespace App\Livewire\Component\Document;

use App\Models\His\ComCode;
use App\Models\TrxDocument;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class FormDocument extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $search = '';
    public $dr;
    public $medicalcd;
    public $pasiencd;
    public $path;

    public $pilihan = [];
    public $form = [
        'medical_cd' => null,
        'pasien_cd' => null,
        'document_tp' => null,
        'keterangan' => null,
        'path' => null,
    ];

    public function mount() {
        $this->form['medical_cd'] = $this->medicalcd;
        $this->form['pasien_cd'] = $this->pasiencd;

    }
    public function clear()  {
        $this->form = [
            'document_tp' => null,
            'keterangan' => null,
            'path' => null,
        ];
    }


    public function updated($property)
    {
        // $property: The name of the current property that was updated

        if ($property === 'search') {

        }
    }



    public function simpan()
    {

        $this->validate([
            'form.document_tp' => 'required',
            'path' => 'required|image',
        ]);
       $a = $this->path->store('path');
        $this->form['path'] = $a;
        // dd($this->form);

        TrxDocument::create(
            $this->form
        );

        $this->dispatch('refresh')->to(TableDocument::class);

        $this->pilihan = [];
        $this->js(<<<'JS'
        Swal.fire(
        'Berhasil!',
        'Data obat berhasil disimpan!',
        'success'
        )
        JS);
        $this->js(<<<'JS'
        setTimeout(() => {
           $('#custom-tabs-six-data-resep-tab').trigger('click');
       }, 300);
       JS);

       $this->clear();
    //    $this->dispatch('refresh')->to();


    }
    public function render()
    {

        $jenisDokumen = ComCode::where('code_group', 'DOCUMENT_TP')->get();
        return view('livewire.component.document.form-document', [
         'jenisdokumen' => $jenisDokumen
        ]);
    }
}
