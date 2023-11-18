<?php

namespace App\Livewire\Component\Radiologi;

use App\Models\His\TrxDokter;
use App\Models\His\TrxMedicalUnit;
use Livewire\Component;
use App\Models\His\TrxUnitmedisItem;
use Livewire\WithPagination;

class ListTindakanRad extends Component
{
    use WithPagination;
    public $search = '';
    public $dr;
    public $medicalcd;
    public $pasiencd;

    public $pilihan = [];
    public $form = [
        'medical_cd' => '',
        'pasien_cd' => '',
        'datetime_trx' => '',
        'dr_cd' => '',
        'dr2_cd' => '',
        'medical_note' => '',
        'medical_cd' => '',
        'group_no' => '',
        'medicalunit_cd' => '',

    ];

    public function mount() {
        $this->form['datetime_trx'] = date('Y-m-d H:i');
        $this->form['dr_cd'] = $this->dr;
        $this->form['medical_cd'] = $this->medicalcd;
        $this->form['pasien_cd'] = $this->pasiencd;

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
            'form.dr_cd' => 'required',
            'pilihan' => 'required',
        ]);
        $groupNo = TrxMedicalUnit::max('medical_unit_seqno');
        $this->form['group_no'] = $groupNo??1;


        for( $i = 0 ; $i< count($this->pilihan) ; $i++){
            $this->form['medicalunit_cd'] = $this->pilihan[$i];

           TrxMedicalUnit::create($this->form);

        }

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
       $this->dispatch('refresh')->to(ListProsesTIndakanLab::class);


    }
    public function render()
    {
        $dokter = TrxDokter::all();
        $tindakan = TrxUnitmedisItem::where('root_st', '0');
        if($this->search){
            $tindakan->where('medicalunit_nm', 'ilike', "%$this->search%");
        }
        $tindakan = $tindakan->paginate(10);
        return view('livewire.component.radiologi.list-tindakan-rad', [
            'list' => $tindakan,
            'dokter' => $dokter
        ]);
    }
}
