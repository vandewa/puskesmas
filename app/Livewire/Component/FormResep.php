<?php

namespace App\Livewire\Component;
use Livewire\Attributes\Computed;

use Livewire\Component;

class FormResep extends Component
{

    public $hari , $dosisdepan, $dosisbelakang;
    public $pagi = [];
    public $siang = [];
    public $sore = [];
    public $malam =[];
    public $habiskan = [];

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

    public function render()
    {
        return view('livewire.component.form-resep');
    }
}
