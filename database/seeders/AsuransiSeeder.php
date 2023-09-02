<?php

use Illuminate\Database\Seeder;
use App\Models\His\TrxInsurance;

class AsuransiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["insurance_cd" => "JKN", "Insurance_nm" => "BPJS"]
        ];

        foreach ($data as $item){
            TrxInsurance::create($item);
        }
    }
}
