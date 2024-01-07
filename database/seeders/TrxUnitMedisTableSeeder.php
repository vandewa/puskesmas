<?php

namespace Database\Seeders;

use App\Models\His\TrxMedicalUnit;
use App\Models\His\TrxUnitMedis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxUnitMedisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_unit_medis')->delete();

        $data = [
            ['medunit_cd' => 'POLIUGD', 'medunit_nm' => 'POLI UGD',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'A',],
            ['medunit_cd' => 'POLIUMUM', 'medunit_nm' => 'POLI UMUM',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'B',],
            ['medunit_cd' => 'POLIGIGI', 'medunit_nm' => 'POLI GIGI',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'C',],
            ['medunit_cd' => 'POLIANAK', 'medunit_nm' => 'POLI ANAK DAN IMUNISASI',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'D',],
            ['medunit_cd' => 'POLIIBU', 'medunit_nm' => 'POLI IBU',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'E',],
            ['medunit_cd' => 'POLIKB', 'medunit_nm' => 'POLI KB',  'medicalunit_tp' => 'MEDICALUNIT_TP_1', 'queue' => 'F',],
            ['medunit_cd' => 'LAB00', 'medunit_nm' => 'LABORATORIUM',  'medicalunit_tp' => 'MEDICALUNIT_TP_2', 'queue' => 'G',],
            ['medunit_cd' => 'RAD00', 'medunit_nm' => 'RADIOLOGI',  'medicalunit_tp' => 'MEDICALUNIT_TP_2', 'queue' => 'H',],
            ['medunit_cd' => 'FARMASI', 'medunit_nm' => 'FARMASI',  'medicalunit_tp' => 'MEDICALUNIT_TP_2', 'queue' => 'I',]
        ];

        foreach($data as $datum) {
            TrxUnitMedis::create($datum);
        }

    }
}
