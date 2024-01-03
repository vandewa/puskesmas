<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxKelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_kelas')->delete();

        DB::table('trx_kelas')->insert(array (
            0 =>
            array (
                'kelas_cd' => 'KL01',
                'kelas_nm' => 'Standar',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '3',
                'data_mapcd' => NULL,
            ),
            1 =>
            array (
                'kelas_cd' => 'KL02',
                'kelas_nm' => 'Bersalin',
                'modi_id' => 'admin',
                'kelas_cd_bpjs' => '4',
                'data_mapcd' => NULL,
            ),

        ));


    }
}
