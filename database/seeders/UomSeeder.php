<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\InvUnit;
use DB;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inv_unit')->truncate();
        $data = [

            ['unit_cd' => 'sachet', 'unit_nm' => 'sachet'],
            ['unit_cd' => 'kapsul', 'unit_nm' => 'kapsul'],
            ['unit_cd' => 'paket', 'unit_nm' => 'paket'],
            ['unit_cd' => 'supp', 'unit_nm' => 'supp'],
            ['unit_cd' => 'liter', 'unit_nm' => 'liter'],
            ['unit_cd' => 'strip', 'unit_nm' => 'strip'],
            ['unit_cd' => 'vial', 'unit_nm' => 'vial'],
            ['unit_cd' => 'pack', 'unit_nm' => 'pack'],
            ['unit_cd' => 'botol', 'unit_nm' => 'botol'],
            ['unit_cd' => 'tablet', 'unit_nm' => 'tablet'],
            ['unit_cd' => 'ampul', 'unit_nm' => 'ampul'],
            ['unit_cd' => 'pot', 'unit_nm' => 'pot'],
            ['unit_cd' => 'tube', 'unit_nm' => 'tube'],

        ];

        foreach ($data as $datum){
            $datum['unit_nm'] = ucwords( $datum['unit_nm']);
            InvUnit::create($datum);
        }
    }
}
