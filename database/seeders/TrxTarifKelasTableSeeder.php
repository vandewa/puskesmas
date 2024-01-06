<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrxTarifKelasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_tarif_kelas')->delete();

        DB::table('trx_tarif_kelas')->insert(array (

            0 =>
            array (
                'seq_no' => 1,
                'insurance_cd' => '',
                'kelas_cd' => 'KL01',
                'tarif' => '200000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            1 =>
            array (
                'seq_no' => 5,
                'insurance_cd' => '',
                'kelas_cd' => 'KL02',
                'tarif' => '600000',
                'account_cd' => 'AC201',
                'rstp_cd' => NULL,
                'modi_id' => 'admin',
            ),
            ));


    }
}
