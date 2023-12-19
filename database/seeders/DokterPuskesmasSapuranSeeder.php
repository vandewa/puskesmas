<?php

namespace Database\Seeders;

use App\Models\His\TrxDokter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DokterPuskesmasSapuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trx_dokter')->truncate();

        $code = TrxDokter::create(["dr_cd" => "dr001", "dr_nm" => "dr. Sumanto", "jabatan" => "Kepala Puskesmas"]);
        $code = TrxDokter::create(["dr_cd" => "dr002", "dr_nm" => "drg. Rina Nurhayati", "jabatan" => "Dokter Gigi"]);
        $code = TrxDokter::create(["dr_cd" => "dr003", "dr_nm" => "dr. Agung Bahari M", "jabatan" => "Dokter Umum"]);
        $code = TrxDokter::create(["dr_cd" => "dr004", "dr_nm" => "dr. Uswatun", "jabatan" => "Dokter Umum"]);
    }
}
