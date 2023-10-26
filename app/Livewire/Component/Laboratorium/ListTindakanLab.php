<?php

namespace App\Livewire\Component\Laboratorium;

use Livewire\Component;
use App\Models\His\TrxUnitmedisItem;
use Livewire\WithPagination;

class ListTindakanLab extends Component
{
    use WithPagination;
    public $search = '';

    public $pilihan = [];
    public $form = [
        ''
    ];



    public function updated($property)
    {
        // $property: The name of the current property that was updated

        if ($property === 'search') {

        }
    }
    public function render()
    {
        $tindakan = TrxUnitmedisItem::where('root_st', '0');
        if($this->search){
            $tindakan->where('medicalunit_nm', 'ilike', "%$this->search%");
        }
        $tindakan = $tindakan->paginate(10);
        return view('livewire.component.laboratorium.list-tindakan-lab', [
            'list' => $tindakan
        ]);
    }
}
