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

        $code = TrxDokter::create(["dr_cd" => "DR0001", "dr_nm" => "dr. Sumanto", "jabatan" => "Kepala Puskesmas",  'paramedis_tp' => 'PARAMEDIS_TP_01',]);
        $code = TrxDokter::create(["dr_cd" => "DR0002", "dr_nm" => "drg. Rina Nurhayati", "jabatan" => "Dokter Gigi",  'paramedis_tp' => 'PARAMEDIS_TP_01',]);
        $code = TrxDokter::create(["dr_cd" => "DR0003", "dr_nm" => "dr. Agung Bahari M", "jabatan" => "Dokter Umum",  'paramedis_tp' => 'PARAMEDIS_TP_01',]);
        $code = TrxDokter::create(["dr_cd" => "DR0004", "dr_nm" => "dr. Uswatun", "jabatan" => "Dokter Umum", 'paramedis_tp' => 'PARAMEDIS_TP_01',]);
        TrxDokter::create([
            'dr_cd' => 'TIMDOKTER',
            'dr_nm' => 'TIM DOKTER',
            'spesialis_cd' => NULL,
            'paramedis_st' => NULL,
            'nip' => NULL,
            'dr_tp' => NULL,
            'address' => NULL,
            'region_prop' => NULL,
            'region_kab' => NULL,
            'region_kec' => NULL,
            'region_kel' => NULL,
            'postcode' => NULL,
            'phone' => NULL,
            'mobile' => NULL,
            'fax' => NULL,
            'email' => NULL,
            'birth_place' => NULL,
            'birth_date' => NULL,
            'age' => NULL,
            'blood_tp' => NULL,
            'weight' => NULL,
            'height' => NULL,
            'gender_tp' => NULL,
            'marital_tp' => NULL,
            'nation_cd' => NULL,
            'religion_cd' => NULL,
            'occupation_cd' => NULL,
            'education_cd' => NULL,
            'race_cd' => NULL,
            'file_picture' => NULL,
            'modi_id' => 'hexsys',
            'paramedis_tp' => 'PARAMEDIS_TP_01',
            'data_mapcd' => NULL,
        ]);
    }
}
