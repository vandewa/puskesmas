<?php

namespace App\Livewire\Pages;

use App\Models\His\ComCode;
use App\Models\His\ComRegion;
use App\Models\His\TrxInsurance;
use Livewire\Component;

class Pendaftaran extends Component
{
    public $edit = false;
    public $form = [
      'no_rm' => '',
      'pasien_cd' => '',
      'birth_date' => '',
      'age' => '',
      'gender_tp' => '',
      'address' => '',
      'region_prop' => '',
      'region_kab' => '',
      'region_kec' => '',
      'region_kel' => '',
      'phone' => '',
      'mobile1' => '',
      'pasien_tp' => '',
      'marital_tp' => '',
      'education_cd' => '',
      'occupation_cd' => '',
      'religion_cd' => '',
      'identity_tp' => '',
      'identity_no' => '',
      'nation_cd' => '',
      'blood_tp' => '',
      'weight' => '',
      'height' => '',
      'email' => '',
      'postcode' => '',
      'dad_name' => '',
      'mom_name' => '',
      'dad_name' => '',
      'pj_name' => '',
      'pj_tp' => '',
      'pj_address' => '',
      'pj_tp' => '',
      'pj_telp' => '',
      'pj_date_birth' => '',
    ];
    public $insurance = [
        'insurance_tp' => '',
        'insurance_no' => ''
    ];

    public $jk, $prop, $kab, $kec, $kel, $tppasien, $status, $pendidikan, $pekerjaan, $suku, $agama, $ras,
    $negara, $goldarah, $tipeIdentitas, $tpjaminan;

    public function mount() {
        $this->form['no_rm'] = gen_no_rm();
        $this->jk = get_code('GENDER_TP');
        $this->prop = ComRegion::where('region_level', 1)->get()->toArray();
        $this->tppasien = get_code('PASIEN_TP');
        $this->tpjaminan = TrxInsurance::all()->toArray();
        $this->status = get_code('MARITAL_TP');
        $this->pendidikan = get_code('EDUCATION_CD');
        $this->pekerjaan = get_code('OCCUPATION_CD');
    }

    public function changeKab($id) {
        $this->kab = ComRegion::where('region_root', $id)->get()->toArray();
    }

    public function changeKec($id) {
        $this->kec = ComRegion::where('region_root', $id)->get()->toArray();
    }
    public function changeKel($id) {
        $this->kel = ComRegion::where('region_root', $id)->get()->toArray();
    }

    public function updated($property)
    {
        // $hitung umum
        if ($property === 'form.birth_date') {
            $date = new \DateTime($this->form['birth_date']);
            $now = new \DateTime();
            $interval = $now->diff($date);
            $this->form['age'] = $interval->y;
        }


        if ($property === 'form.pasien_tp') {
            if($this->form['pasien_tp'] != 'PASIEN_TP_02') {
                $this->insurance['insurance_cd'] = "";
                $this->insurance['insurance_no'] = "";
            }
        }

        if ($property === 'form.region_prop') {
            $this->changeKab($this->form['region_prop']);
            $this->form['region_kab'] = '';
            $this->form['region_kec'] = '';
            $this->form['region_kel'] = '';
        }
        if ($property === 'form.region_kab') {
            $this->changeKec($this->form['region_kab']);
            $this->form['region_kec'] = '';
            $this->form['region_kel'] = '';
         }
        if ($property === 'form.region_kec') {
            $this->changeKel($this->form['region_kec']);
            $this->form['region_kel'] = '';
         }
    }

    public function render()
    {
        return view('livewire.pages.pendaftaran');
    }
}
