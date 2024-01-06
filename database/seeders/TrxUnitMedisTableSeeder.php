<?php

namespace Database\Seeders;

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

        DB::table('trx_unit_medis')->insert(array (
            0 =>
            array (
                'medunit_cd' => 'POLIUGD',
                'medunit_nm' => 'POLI UGD',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'poliugd01',
                'queue' => '1001',
                'medunit_cd_bpjs' => NULL,
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),

            1 =>
            array (
                'medunit_cd' => 'LAB00',
                'medunit_nm' => 'LABORATORIUM',
                'medicalunit_tp' => 'MEDICALUNIT_TP_2',
                'modi_id' => 'admin',
                'queue' => NULL,
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),










            2 =>
            array (
                'medunit_cd' => 'POLIUMUM',
                'medunit_nm' => 'POLI UMUM',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => '1002',
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),
            3 =>
            array (
                'medunit_cd' => 'POLIGIGI',
                'medunit_nm' => 'POLI GIGI',
                'medicalunit_tp' => 'MEDICALUNIT_TP_1',
                'modi_id' => 'admin',
                'queue' => '1002',
                'medunit_cd_bpjs' => '',
                'data_mapcd' => NULL,
                'data_exst' => NULL,
            ),

        ));


    }
}
