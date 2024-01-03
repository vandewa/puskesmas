<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\His\TrxTindakan;
use App\Models\His\TrxTarifTindakan;

class TindakanSapuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['treatment_cd' => '11', 'treatment_nm' =>  'Persalinan normal oleh dokter','harga' => '800000' ],
            ['treatment_cd' => '12', 'treatment_nm' =>  'Persalinan normal oleh Bidan','harga' => '700000' ],
            ['treatment_cd' => '13', 'treatment_nm' =>  'Persalinan dengan tindakan emergensi dasar','harga' => '950000' ],
            ['treatment_cd' => '14', 'treatment_nm' =>  'Injeksi','harga' => '15000' ],
            ['treatment_cd' => '15', 'treatment_nm' =>  'Kuras lambung','harga' => '15000' ],
            ['treatment_cd' => '16', 'treatment_nm' =>  'Pembersihan discharge','harga' => '15000' ],
            ['treatment_cd' => '17', 'treatment_nm' =>  'Pengambilan serumen','harga' => '15000' ],
            ['treatment_cd' => '18', 'treatment_nm' =>  'Pengambilan benda asing di telinga','harga' => '20000' ],
            ['treatment_cd' => '19', 'treatment_nm' =>  'Tampon telinga','harga' => '15000' ],
            ['treatment_cd' => '20', 'treatment_nm' =>  'Pengambilan benda asing di hidung','harga' => '20000' ],
            ['treatment_cd' => '21', 'treatment_nm' =>  'Tampon hidung anterior','harga' => '20000' ],
            ['treatment_cd' => '22', 'treatment_nm' =>  'Tampon hisung posterior','harga' => '50000' ],
            ['treatment_cd' => '23', 'treatment_nm' =>  'Resposisi','harga' => '30000' ],
            ['treatment_cd' => '24', 'treatment_nm' =>  'Spalk kecil','harga' => '10000' ],
            ['treatment_cd' => '25', 'treatment_nm' =>  'Spalk  sedang','harga' => '20000' ],
            ['treatment_cd' => '26', 'treatment_nm' =>  'Spalk  Besar','harga' => '30000' ],
            ['treatment_cd' => '27', 'treatment_nm' =>  'Ganti balut kecil','harga' => '10000' ],
            ['treatment_cd' => '28', 'treatment_nm' =>  'Ganti balut sedang','harga' => '15000' ],
            ['treatment_cd' => '29', 'treatment_nm' =>  'Ganti balut besar','harga' => '20000' ],
            ['treatment_cd' => '30', 'treatment_nm' =>  'Tindik telinga','harga' => '15000' ],
            ['treatment_cd' => '31', 'treatment_nm' =>  'Pasang kateter','harga' => '15000' ],
            ['treatment_cd' => '32', 'treatment_nm' =>  'Pelepasan cateter','harga' => '15000' ],
            ['treatment_cd' => '33', 'treatment_nm' =>  'Ransel perban','harga' => '10000' ],
            ['treatment_cd' => '34', 'treatment_nm' =>  'Perawatan luka bakar kecil','harga' => '10000' ],
            ['treatment_cd' => '35', 'treatment_nm' =>  'Perawatan luka bakar sedang','harga' => '15000' ],
            ['treatment_cd' => '36', 'treatment_nm' =>  'Perawatan luka bakar besar','harga' => '30000' ],
            ['treatment_cd' => '37', 'treatment_nm' =>  'Schoortein','harga' => '10000' ],
            ['treatment_cd' => '38', 'treatment_nm' =>  'Pasang infus ','harga' => '10000' ],
            ['treatment_cd' => '39', 'treatment_nm' =>  'Dresing infuse','harga' => '10000' ],
            ['treatment_cd' => '40', 'treatment_nm' =>  'Lavement Gliserin','harga' => '10000' ],
            ['treatment_cd' => '41', 'treatment_nm' =>  'Chircumsisi','harga' => '250000' ],
            ['treatment_cd' => '42', 'treatment_nm' =>  'Incici','harga' => '20000' ],
            ['treatment_cd' => '43', 'treatment_nm' =>  'Lipoma,kista,ganglion dan lainnya ','harga' => '125000' ],
            ['treatment_cd' => '44', 'treatment_nm' =>  'Extraksi kuku ','harga' => '50000' ],
            ['treatment_cd' => '45', 'treatment_nm' =>  'Extraksi veruka   ','harga' => '50000' ],
            ['treatment_cd' => '46', 'treatment_nm' =>  'Viksasi dengan gips    ','harga' => '75000' ],
            ['treatment_cd' => '47', 'treatment_nm' =>  'Jahit luka kurang dari 6 jahitan  ','harga' => '20000' ],
            ['treatment_cd' => '48', 'treatment_nm' =>  '6-10 jahitan','harga' => '30000' ],
            ['treatment_cd' => '49', 'treatment_nm' =>  'Diatas 10 Jahitan','harga' => '60000' ],
            ['treatment_cd' => '50', 'treatment_nm' =>  'Hetting off  1 – 10  ','harga' => '10000' ],
            ['treatment_cd' => '51', 'treatment_nm' =>  'Hetting off 11 – 30','harga' => '15000' ],
            ['treatment_cd' => '52', 'treatment_nm' =>  'Pasang sonde ','harga' => '15000' ],
            ['treatment_cd' => '53', 'treatment_nm' =>  'Extraksi korpus alienium termasuk serumen di telinga,hidung','harga' => '20000' ],
            ['treatment_cd' => '54', 'treatment_nm' =>  'Pemasangan naso gastric tube','harga' => '50000' ],
            ['treatment_cd' => '55', 'treatment_nm' =>  'Tindakan pendampingan rujukan > 25 km','harga' => '250000' ],
            ['treatment_cd' => '56', 'treatment_nm' =>  'Tindakan pendampingan rujukan 10 -  25 km ','harga' => '175000' ],
            ['treatment_cd' => '57', 'treatment_nm' =>  'Tindakan pendampingan rujukan dekat < 10 km ','harga' => '125000' ],
            ['treatment_cd' => '58', 'treatment_nm' =>  'Tindakan fisioterapy','harga' => '25000' ],
            ['treatment_cd' => '59', 'treatment_nm' =>  'Pembersihan karang gigi per region','harga' => '15000' ],
            ['treatment_cd' => '60', 'treatment_nm' =>  'Aplikasi flour per rahang','harga' => '10000' ],
            ['treatment_cd' => '61', 'treatment_nm' =>  'Pemotongan akar gigi susu pada kasus apical penestrasi','harga' => '5000' ],
            ['treatment_cd' => '62', 'treatment_nm' =>  'Penambalan gigi sementara','harga' => '10000' ],
            ['treatment_cd' => '63', 'treatment_nm' =>  'Fissure sealent','harga' => '15000' ],
            ['treatment_cd' => '64', 'treatment_nm' =>  'Penambalan semen ionomer kaca lubang kecil','harga' => '15000' ],
            ['treatment_cd' => '65', 'treatment_nm' =>  'Penambalan semen ionomer kaca lubang besar','harga' => '20000' ],
            ['treatment_cd' => '66', 'treatment_nm' =>  'Devitalisasi pulpa','harga' => '15000' ],
            ['treatment_cd' => '67', 'treatment_nm' =>  'Perawatan syaraf','harga' => '15000' ],
            ['treatment_cd' => '68', 'treatment_nm' =>  'Perawatan saluran akar','harga' => '20000' ],
            ['treatment_cd' => '69', 'treatment_nm' =>  'Pengambilan tumpatan','harga' => '10000' ],
            ['treatment_cd' => '70', 'treatment_nm' =>  'Pencabutan gigi susu tanpa injeksi','harga' => '13000' ],
            ['treatment_cd' => '71', 'treatment_nm' =>  'Pencabutan gigi susu dengan injeksi','harga' => '15000' ],
            ['treatment_cd' => '72', 'treatment_nm' =>  'Pencabutan gigi tetap tanpa penyulit/komplikasi','harga' => '20000' ],
            ['treatment_cd' => '73', 'treatment_nm' =>  'Pencabutan gigi tetap dengan penyulit/komplikasi','harga' => '25000' ],
            ['treatment_cd' => '74', 'treatment_nm' =>  'Insisi abses dengan injeksi','harga' => '25000' ],
            ['treatment_cd' => '75', 'treatment_nm' =>  'Kuretase ','harga' => '25000' ],
            ['treatment_cd' => '76', 'treatment_nm' =>  'Perawatan dengan dry socket','harga' => '15000' ],
            ['treatment_cd' => '77', 'treatment_nm' =>  'Trepanasi ','harga' => '10000' ],
            ['treatment_cd' => '78', 'treatment_nm' =>  'Operculectomy sederhana','harga' => '25000' ],
            ['treatment_cd' => '79', 'treatment_nm' =>  'Reposisi rahang bawah sederhana','harga' => '20000' ],
            ['treatment_cd' => '80', 'treatment_nm' =>  'One day care      ','harga' => '200000' ],
            ['treatment_cd' => '81', 'treatment_nm' =>  'Home care ( dalam wilayah Puskesmas )  ','harga' => '100000' ],
            ['treatment_cd' => '82', 'treatment_nm' =>  'Pelayanan visum hidup  ','harga' => '50000' ],
            ['treatment_cd' => '83', 'treatment_nm' =>  'Pemeriksaan luar jenazah  ','harga' => '50000' ],
            ['treatment_cd' => '84', 'treatment_nm' =>  'Pemeriksaan kesehatan / kir umum','harga' => '20000' ],
            ['treatment_cd' => '85', 'treatment_nm' =>  'Pemeriksaan kesehatan / kir anak sekolah','harga' => '10000' ],
            ['treatment_cd' => '86', 'treatment_nm' =>  'Pemeriksaan kesehatan calon mempelai per orang ','harga' => '20000' ],
            ['treatment_cd' => '87', 'treatment_nm' =>  'Pemeriksaan kesehatan calon haji (anamnesa,pemeiksaan fisik,deteksi kejiwaan )','harga' => '25000' ],
            ['treatment_cd' => '88', 'treatment_nm' =>  'Pemeriksaan kesehatan calon haji        ( rochport test )','harga' => '50000' ],
            ['treatment_cd' => '89', 'treatment_nm' =>  'Elektro kardio grafi (EKG )','harga' => '30000' ],
            ['treatment_cd' => '90', 'treatment_nm' =>  'Ultrasonografi ( USG )','harga' => '30000' ],
            ['treatment_cd' => '91', 'treatment_nm' =>  'Nebuliser  ','harga' => '20000' ],
            ['treatment_cd' => '92', 'treatment_nm' =>  'Oksigen 1 jam pertama ','harga' => '25000' ],
            ['treatment_cd' => '93', 'treatment_nm' =>  'Oksigen penambahan tiap tiap jam ','harga' => '10000' ],
            ['treatment_cd' => '94', 'treatment_nm' =>  'Pemeriksaan IVA','harga' => '25000' ],
            ['treatment_cd' => '95', 'treatment_nm' =>  'Terapi krio','harga' => '150000' ],
            ['treatment_cd' => '96', 'treatment_nm' =>  'Pap smear  ','harga' => '125000,' ],
            ['treatment_cd' => '97', 'treatment_nm' =>  'Pemeiksaan ibu hamil ( ANC )','harga' => '20000' ],
            ['treatment_cd' => '98', 'treatment_nm' =>  'Pemeriksaan paska persalinan ( PNC )','harga' => '10000' ],
            ['treatment_cd' => '99', 'treatment_nm' =>  'Pemeriksaan spirometri ','harga' => '20000' ],
            ['treatment_cd' => '100', 'treatment_nm' =>  'Injeksi kontrasepsi','harga' => '15000' ],
            ['treatment_cd' => '101', 'treatment_nm' =>  'Pasang susuk / inplan ','harga' => '50000' ],
            ['treatment_cd' => '102', 'treatment_nm' =>  'Bongkar susuk / inplan  ','harga' => '50000' ],
            // ['treatment_cd' => '', 'treatment_nm' =>  '','harga' => '' ],
            ['treatment_cd' => '103', 'treatment_nm' =>  'Pasang IUD ','harga' => '50000' ],
            ['treatment_cd' => '104', 'treatment_nm' =>  'Pasang IUD dan pemeriksaan IVA ','harga' => '60000' ],
            ['treatment_cd' => '105', 'treatment_nm' =>  'Bongkar IUD ','harga' => '30000' ],
            ];

        foreach($data as $datum){
         $a =   TrxTindakan::create([
                'treatment_cd' => $datum['treatment_cd'],
                'treatment_nm' => $datum['treatment_nm'],
            ]);

            TrxTarifTindakan::create([
                'treatment_cd' => $datum['treatment_cd'],
                'tarif' => $datum['harga'],
                'account_cd' => 'AC230',
            ]);
        }

    }
}
