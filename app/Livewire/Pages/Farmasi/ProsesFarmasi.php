<?php

namespace App\Livewire\Pages\Farmasi;

use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;
use App\Models\His\TrxResepData;
use Livewire\Component;
use Livewire\Attributes\On;

class ProsesFarmasi extends Component
{
    public $medicalcd;
    public $racik = false;
    public $medik;
    public function mount($id = '') {
        if($id) {
            $this->medik = TrxMedical::find($id);
            $this->medicalcd = $id;
        }
    }

    public function selesai($id) {
        TrxMedicalResep::find($id)->update([
            'proses_st' => true
        ]);

        $this->js(<<<'JS'
            Swal.fire({
            title: "Berhasil",
            text: "Resep Berhasil di Proses",
            icon: "success"
            });
        JS);
    }

    #[On('show-racik')]
    public function racik()
    {
        $this->racik = !$this->racik;
    }
    public function edit($id) {
        // dd($id);
        $this->dispatch('edit-resep', $id);
    //     $this->js(<<<'JS'
    //     setTimeout(() => {
    //        $('#tombol-tambah-resep').trigger('click');
    //    }, 300);
    //    JS);
    }
    public function render()
    {
        $data = TrxMedicalResep::with(['resepData.resepRacik'])->where('medical_cd', $this->medicalcd)->get();
        // $data = TrxResepData::whereHas('resepHeader', function($a){
        //         $a->where('medical_cd', $this->medicalcd);
        // })->with(['resepHeader'])->get();

        return view('livewire.pages.farmasi.proses-farmasi',
        ['resep' => $data]);
    }
}
