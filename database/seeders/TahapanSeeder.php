<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demo\Tahapan;

class TahapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tahapan::create([
            'no' => 1,
            'name' => 'Seleksi Berkas',
        ]);
        Tahapan::create([
            'no' => 2,
            'name' => 'Psikotes & Test Fisik',
        ]);
        Tahapan::create([
            'no' => 3,
            'name' => 'Wawancara 1',
        ]);

        Tahapan::create([
            'no' => 4,
            'name' => 'Pendidikan',
        ]);
        Tahapan::create([
            'no' => 5,
            'name' => 'Wawancara User',
        ]);
        Tahapan::create([
            'no' => 6,
            'name' => 'MCU',
        ]);

        Tahapan::create([
            'no' => 7,
            'name' => 'Pengurusan Berkas Keberangkatan',
        ]);
        Tahapan::create([
            'no' => 8,
            'name' => 'Keberangkatan',
        ]);
        Tahapan::create([
            'no' => 9,
            'name' => 'Magang DI Jepang',
        ]);
    }
}
