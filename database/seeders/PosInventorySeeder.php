<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\His\InvPosInventory;

class PosInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['pos_cd' => 'GDG_01', 'pos_nm' => 'Gudang Utama'],
            ['pos_cd' => 'GDG_02', 'pos_nm' => 'Farmasi'],
            ['pos_cd' => 'GDG_03', 'pos_nm' => 'IGD'],
            ['pos_cd' => 'GDG_04', 'pos_nm' => 'Laboratorium'],
        ];

        foreach ($data as $datum){
            InvPosInventory::create($datum);
        }
    }
}
