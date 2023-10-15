<?php

namespace App\Livewire\Component;

use App\Models\His\InvItemMaster;
use App\Models\His\InvUnit;
use App\Models\His\TrxDokter;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class FormResepRacik extends Component
{

    public $hari , $dosisdepan, $dosisbelakang;
    public $pagi = [];
    public $siang = [];
    public $sore = [];
    public $malam =[];
    public $habiskan = [];

    public $form= [
        'resep_no' => null,
        'resep_date' => null,
        'dr_cd' => null,
    ];

    public $dr_cd;

    public $jumlah;
    public $obat;
    public $pilihSatuan;
    public $paket;
    public $satuanPaket;

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

    #[On('pilih-obat-racik')]
    public function pilihObat($id = "")
    {
        $this->obat = InvItemMaster::with(['satuan'])->findorfail($id);
        $this->pilihSatuan = $this->obat->unit_cd;

        $this->js('
        setTimeout(() => {
            document.getElementById("jumlah").focus();
        }, 100);
        ');

    }

    public function mount() {


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

        // $this->validate([
        //     'jumlah' => 'required',
        //     'dosisbelakang' => 'required',
        //     'dosisdepan' => 'required',
        // ]);

        $isian = [
            'item_cd'   => $this->obat->item_cd,
            'data_nm'   => $this->obat->item_nm,
            'quantity'  => $this->jumlah,
            'satuan'   => $this->obat->satuan->unit_nm,
            'trx_satuan' => $this->obat->unit_cd
        ];



        // $this->obatTable->push($isian);
        array_push($this->obatTable, $isian);
        $this->obat = null;
        $this->jumlah = null;
    }

    public function resetForm()
    {

        $this->hari = null;
        $this->dosisdepan = null;
        $this->dosisbelakang = null;
        $this->pagi = [];
        $this->siang = [];
        $this->sore = [];
        $this->malam =[];
        $this->habiskan = [];
        $this->paket = null;
        $this->satuanPaket = null;

    }
    public function genTable() {
        $data = '';
        foreach($this->obatTable as $item){
            $data = $data.' '.$item['data_nm'].' => '.$item['quantity'].' '.$item['satuan'].'<br>';
        }

        return $data;
    }
     // kirim resep racik ke resep biasa
    public function simpan() {
        if(count($this->obatTable) <=0){
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
            'paket' => 'required',
            'satuanPaket' => 'required',
            'dosisbelakang' => 'required',
            'dosisdepan' => 'required',
        ]);

        $this->obatTableRacik = [
            'item_cd'   => null,
            'data_nm'   => $this->genTable(),
            'quantity'  => $this->paket,
            'info_01'   => $this->catatan,
            'resep_tp'  => 'RESEP_TP_2',
            'info_02'   => $this->satuanPaket,
        ];

        $this->dispatch('data-racikan', header: $this->obatTableRacik, body: $this->obatTable);
        $this->obatTable = [];
        $this->obatTableRacik = [];
        $this->dispatch('show-racik');
    }

    public function deleteObat($id)
    {
      unset($this->obatTable[$id]);
    }

    public function render()
    {
        return view('livewire.component.form-resep-racik',[
            'satuan' => InvUnit::all()
        ]);
    }
}
