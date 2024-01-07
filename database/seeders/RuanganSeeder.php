<?php

namespace Database\Seeders;

use App\Models\His\TrxBangsal;
use App\Models\His\TrxKamar;
use App\Models\His\TrxRuang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrxBangsal::create([
            'bangsal_cd' => 'bangsal',
            'bangsal_nm' => 'Bangsal',
        ]);
        TrxKamar::create([
            'kamar_cd' => 'A1',
            'kamar_nm' => 'Kamar 1',
            'bangsal_cd' => 'bangsal',
        ]);
        TrxKamar::create([
            'kamar_cd' => 'A2',
            'kamar_nm' => 'Kamar 2',
            'bangsal_cd' => 'bangsal',
        ]);

        TrxRuang::create([
            'ruang_cd' => 'R1',
            'kelas_cd' => 'KL01',
            'bangsal_cd' => 'bangsal',
            'ruang_nm' => 'A1',
            'kamar_cd' => 'A1',
            'kondisi_st' => 'KONDISI_ST_02',

        ]);
        TrxRuang::create([
            'ruang_cd' => 'R2',
            'kelas_cd' => 'KL01',
            'bangsal_cd' => 'bangsal',
            'ruang_nm' => 'A2',
            'kamar_cd' => 'A1',
            'kondisi_st' => 'KONDISI_ST_02',

        ]);
        TrxRuang::create([
            'ruang_cd' => 'R3',
            'kelas_cd' => 'KL01',
            'bangsal_cd' => 'bangsal',
            'ruang_nm' => 'A3',
            'kamar_cd' => 'A1',
            'kondisi_st' => 'KONDISI_ST_02',

        ]);
    }
}
