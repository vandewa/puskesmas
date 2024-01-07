<?php

namespace Database\Seeders;

use App\Models\His\TrxDokter;
use App\Models\His\TrxJadwal;
use Illuminate\Database\Seeder;

class TrxDokterTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $data =  [
            ['dr_cd' => 'DR00', 'dr_nm' =>  'TIM DOKTER', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR01', 'dr_nm' =>  'dr. Priyo Hadi S', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR02', 'dr_nm' =>  'drg. Rina Nurhayati', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR03', 'dr_nm' =>  'dr. Agung Bahari M', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR04', 'dr_nm' =>  'dr. Uswatun', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR05', 'dr_nm' =>  'Wiwik cahyani', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
            ['dr_cd' => 'DR06', 'dr_nm' =>  'Sintya Ayu R ', 'paramedis_tp' => 'PARAMEDIS_TP_01'],
        ];
        foreach($data as $datum){
            TrxDokter::create($datum);
            
        }
    }
}
