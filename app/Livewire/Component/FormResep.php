<?php

namespace App\Livewire\Component;

use App\Livewire\Component\Resep\TableResep;
use App\Models\His\InvItemMaster;
use App\Models\His\TrxDokter;
use App\Models\His\TrxMedical;
use App\Models\His\TrxMedicalResep;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;
use Illuminate\Support\Arr;

class FormResep extends Component
{

    public $hari , $dosisdepan, $dosisbelakang;
    public $pagi = [];
    public $siang = [];
    public $sore = [];
    public $malam =[];
    public $habiskan = [];
    public $racik;
    public $medicalcd;
    public $dataMedic ;

    public $form= [
        'resep_no' => null,
        'resep_date' => null,
        'dr_cd' => null,
    ];

    public $dr_cd;

    public $jumlah;
    public $obat;
    public $dokter;

    public $obatTable = [];
    public $obatTableRacik = [];

    #[Computed]
    public function catatan() {
        $data = '';
        $pagi = $this->pagi[0]??"";
        $siang = $this->siang[0]??"";
        $sore = $this->sore[0]??"";
        $malam = $this->malam[0]??"";
        $habiskan = $this->habiskan[0]??"";
        if($this->dosisdepan){
            $data = $data.' '.$this->dosisdepan .' X '. $this->dosisbelakang.' ';

        }
        $data = $data.' '.$this->hari;
        $data = $data.' '.$habiskan;
        $data = $data.' '.$pagi.' '.$siang.' '.$sore.' '.$malam.' ';
        return $data;
    }

    #[On('pilih-obat')]
    public function pilihObat($id = "")
    {
        $this->obat = InvItemMaster::with(['satuan'])->findorfail($id);

        $this->js('
        setTimeout(() => {
            document.getElementById("jumlah-obat").focus();
        }, 100);
        ');

    }

    #[On('show-racik')]
    public function racik()
    {
        $this->racik = null;
    }

    // terima dari resep racik
    #[On('data-racikan')]
    public function dataRacikan($header, $body)
    {
        // gabungkan degnan resep racik
        $data = $header + ['racikan' => $body];

        array_push($this->obatTable, $data);
        $this->racik = null;
    }

    public function mount() {
        $this->form['resep_no'] = gen_no_resep();
        $this->form['tanggal'] = date('Y-m-d');
        $this->form['dr_cd'] = $this->dr_cd;
        $this->dokter = TrxDokter::all()->toArray();


    }

    public function tambah() {
        if(!$this->obat){
            $this->js("
                Swal.fire(
                'Ops!',
                'Anda harus memilih obat terlebih dahulu!',
                'error'
              )
            ");

            return ;
        }

        $this->validate([
            'jumlah' => 'required',
            'dosisbelakang' => 'required',
            'dosisdepan' => 'required',
        ]);

        $isian = [
            'item_cd'   => $this->obat->item_cd,
            'data_nm'   => $this->obat->item_nm,
            'quantity'  => $this->jumlah,
            'info_01'   => $this->catatan,
            'resep_tp'  => 'RESEP_TP_1',
            'info_02'   => $this->obat->satuan->unit_nm,
        ];



        // $this->obatTable->push($isian);
        array_push($this->obatTable, $isian);
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->obat = null;
        $this->jumlah = null;
        $this->hari = null;
        $this->dosisdepan = null;
        $this->dosisbelakang = null;
        $this->pagi = [];
        $this->siang = [];
        $this->sore = [];
        $this->malam =[];
        $this->habiskan = [];

    }

    public function deleteObat($id)
    {
      unset($this->obatTable[$id]);
    }

    // simpan ke database
    public function simpan() {



        if(count($this->obatTable) <=0){
            $this->js(<<<'JS'
                Swal.fire(
                'Ops!',
                'Anda harus memilih obat terlebih dahulu!',
                'error'
                )
            JS);
            return ;
        }

        $resep = TrxMedicalResep::create([
            'medical_cd' => $this->dataMedic->medical_cd,
            'dr_cd' => $this->dr_cd,
            'resep_date' => now(),
            'proses_st' => 0,
            'resep_no' => gen_no_resep()
        ]);
        foreach($this->obatTable as $item) {
            if($item['resep_tp'] == 'RESEP_TP_1') {
                $resep->resepData()->create(
                    $item
                );
            } else {

                // Buang Racikan
                $filtered = Arr::except($item, ['racikan']);
                $data =  $resep->resepData()->create(
                    $filtered
                );

                foreach($item['racikan'] as $racik) {
                    $data->resepRacik()->create(
                        $racik
                    );
                }


            }

        }

        $this->js(<<<'JS'
            Swal.fire(
            'Berhasil!',
            'Data obat berhasil disimpan!',
            'success'
            )
            JS);
            $this->resetForm();
            $this->form['resep_no'] = gen_no_resep();
            $this->obatTable = [];
            $this->js(<<<'JS'
             setTimeout(() => {
                $('#custom-tabs-six-data-resep-tab').trigger('click');
            }, 300);
            JS);
            $this->dispatch('refresh')->to(TableResep::class);
    }

    public function render()
    {
        return view('livewire.component.form-resep');
    }
}
