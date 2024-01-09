<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\His\TrxJadwal;


class TrxJadwalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('trx_jadwal')->delete();

        for($i = 1 ; $i<=6 ; $i++){
                echo $i;
                TrxJadwal::create([
                'dr_cd' => 'DR02',
                'medunit_cd' => 'POLIGIGI',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                ]);
                TrxJadwal::create([
                'dr_cd' => 'DR03',
                'medunit_cd' => 'POLIUMUM',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '07:00:00',
                'time_end' => '14:00:00',
                ]);
                TrxJadwal::create([
                'dr_cd' => 'DR00',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '00:00:00',
                'time_end' => '23:59:59',
                ]);
                TrxJadwal::create([
                'dr_cd' => 'DR00',
                'medunit_cd' => 'POLIANAK',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '00:00:00',
                'time_end' => '23:59:59',
                ]);
                TrxJadwal::create([
                'dr_cd' => 'DR00',
                'medunit_cd' => 'POLIIBU',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '00:00:00',
                'time_end' => '23:59:59',
                ]);
                TrxJadwal::create([
                'dr_cd' => 'DR00',
                'medunit_cd' => 'POLIKB',
                'day_tp' => 'DAY_TP_0'.$i,
                'time_start' => '00:00:00',
                'time_end' => '23:59:59',
                ]);
            }
            TrxJadwal::create([
                'dr_cd' => 'DR00',
                'medunit_cd' => 'POLIUGD',
                'day_tp' => 'DAY_TP_00',
                'time_start' => '00:00:00',
                'time_end' => '23:59:59',
                ]);


    }
}
