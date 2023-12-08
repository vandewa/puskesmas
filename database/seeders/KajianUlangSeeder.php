<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComCode as Code;

class KajianUlangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $code = Code::create(["com_cd" => "AKTIVITAS_TP_01", "code_nm" => "Ringan", "code_group" => "AKTIVITAS_TP", "code_value" => null]);

    }
}
