<?php

namespace Database\Seeders;

use App\Models\His\TrxUnitMedis;
use App\Models\His\TrxUnitmedisItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class LabSapuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trx_unitmedis_item')->truncate();
        $data = [
            ['medicalunit_cd' => 'A1', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Hematologi', 'root_st' => '0','data_01' => 'Normal'],
            ['medicalunit_cd' => 'A2', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Hemoglobin', 'root_st' => '0','data_01' => 'L (14-18) P(12-16)'],
            ['medicalunit_cd' => 'A3', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Leukosit', 'root_st' => '0','data_01' => '5000-10000'],
            ['medicalunit_cd' => 'A4', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Eritrosit', 'root_st' => '0','data_01' => 'L (4,5-6,5) P(3,8-5,6) Juta'],
            ['medicalunit_cd' => 'A5', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Trombosit', 'root_st' => '0','data_01' => '150-400 ribu'],
            ['medicalunit_cd' => 'A6', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'HJL Eosinofil', 'root_st' => '0','data_01' => '1-3%'],
            ['medicalunit_cd' => 'A7', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Basofil', 'root_st' => '0','data_01' => '0-1%'],
            ['medicalunit_cd' => 'A8', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'NetrofilBarang', 'root_st' => '0','data_01' => '2-6%'],
            ['medicalunit_cd' => 'A9', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Netrofil Segmen', 'root_st' => '0','data_01' => '40 -80 %'],
            ['medicalunit_cd' => 'A10', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Limfosit', 'root_st' => '0','data_01' => '20-40%'],
            ['medicalunit_cd' => 'A11', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Monosit', 'root_st' => '0','data_01' => '2-9 %'],
            ['medicalunit_cd' => 'A12', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'Hematokrit', 'root_st' => '0','data_01' => 'L (40-50) P(37-47)'],
            ['medicalunit_cd' => 'A13', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A1',  'medicalunit_nm' => 'LED', 'root_st' => '0','data_01' => '< 10mm/jam, 1 jam'],
            ['medicalunit_cd' => 'A14', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Urinalisa', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A15', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Warna', 'root_st' => '0','data_01' => 'Kuning'],
            ['medicalunit_cd' => 'A16', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Kejernihan', 'root_st' => '0','data_01' => 'Jernih'],
            ['medicalunit_cd' => 'A17', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Berat Jenis', 'root_st' => '0','data_01' => '1005-1030'],
            ['medicalunit_cd' => 'A18', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'PH', 'root_st' => '0','data_01' => '45479'],
            ['medicalunit_cd' => 'A19', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Protein', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A20', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Urobilonogen', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A21', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Natrit', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A22', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Leukocyte', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A23', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Glukosa', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A24', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Bilirubin', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A25', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Blood', 'root_st' => '0','data_01' => 'Negatif'],
            // ['medicalunit_cd' => 'A26', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A27', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen - Leukosit', 'root_st' => '0','data_01' => '0-5 Sel/lp'],
            ['medicalunit_cd' => 'A28', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen- Eritrosit', 'root_st' => '0','data_01' => '0-5 Sel/lp'],
            ['medicalunit_cd' => 'A29', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen - Epitel', 'root_st' => '0','data_01' => '0-5 Sel/lp'],
            ['medicalunit_cd' => 'A30', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen - Silinder', 'root_st' => '0','data_01' => '0-5 Sel/lp'],
            ['medicalunit_cd' => 'A31', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A14',  'medicalunit_nm' => 'Sedimen - Kristal', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A33', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Sedimen - Kimia Darah', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A34', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'Sedimen - Glukosa Sewaktu', 'root_st' => '0','data_01' => '80-150mg/dl'],
            ['medicalunit_cd' => 'A35', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'GDP', 'root_st' => '0','data_01' => '< 110Mg/dl'],
            ['medicalunit_cd' => 'A36', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'GDPP', 'root_st' => '0','data_01' => '< 140Mg/dl'],
            ['medicalunit_cd' => 'A37', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'Cholesterol', 'root_st' => '0','data_01' => '< 150 Mg/ dl'],
            ['medicalunit_cd' => 'A38', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'Trigliserida', 'root_st' => '0','data_01' => '< 150 Mg/ dl'],
            ['medicalunit_cd' => 'A39', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A33',  'medicalunit_nm' => 'Asam Urat', 'root_st' => '0','data_01' => 'L < 7mg/dl, P < 5mg/dl'],
            ['medicalunit_cd' => 'A40', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Imunoserologi', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A41', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'Widal Thyp H', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A42', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'Widal Thypi O', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A43', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'HBSAG', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A44', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'Sifilis', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A45', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'PP TEST', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A46', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'Golongan Darah', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A47', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A40',  'medicalunit_nm' => 'VCT', 'root_st' => '0','data_01' => 'Non Reaktif'],
            ['medicalunit_cd' => 'A48', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Parasiotologi', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A49', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A48',  'medicalunit_nm' => 'Malaria', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A50', 'medunit_cd' => 'LAB00', 'medicalunit_root' => '',  'medicalunit_nm' => 'Bakteriologi', 'root_st' => '0','data_01' => ''],
            ['medicalunit_cd' => 'A51', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A50',  'medicalunit_nm' => 'Sputum Sewaktu (A)', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A52', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A50',  'medicalunit_nm' => 'Sputum Pagi (B)', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A53', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A50',  'medicalunit_nm' => 'Sputum Sewaktu II', 'root_st' => '0','data_01' => 'Negatif'],
            ['medicalunit_cd' => 'A54', 'medunit_cd' => 'LAB00', 'medicalunit_root' => 'A50',  'medicalunit_nm' => 'Morbili', 'root_st' => '0','data_01' => ''],

        ];

        foreach ($data as $item) {
            $a = TrxUnitmedisItem::create($item);

            if($item['medicalunit_root'] == ''){
                $a->update([
                    'root_st' => 1,
                ]);
            }
        }
    }
}
