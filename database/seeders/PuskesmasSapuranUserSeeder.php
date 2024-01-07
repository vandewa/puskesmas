<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PuskesmasSapuranUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Prasetyaning D Woro', 'email' => 'Prasetyaning@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Etty Sulistyandari', 'email' => 'Etty@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Nur Baeti', 'email' => 'Nur@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Wahyu Widayati', 'email' => 'Wahyu@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Endang Dwiningsih', 'email' => 'Endang@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Agnes Amuranti', 'email' => 'Agnes@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Sih Lumintu', 'email' => 'Sih@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Wiwik cahyani', 'email' => 'Wiwik@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Dwi Indaryati', 'email' => 'Dwip@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Rahayuningsih', 'email' => 'Rahayuningsih@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Titang Yunita', 'email' => 'Titang@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Sri Wahyuni', 'email' => 'Sri@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Ika Yulianti', 'email' => 'Ika@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Retno W. A', 'email' => 'retnowa@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Binti F', 'email' => 'Binti@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Retno W. B', 'email' => 'retnowb@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Endah Lestari', 'email' => 'Endah@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Tri Wahyuti', 'email' => 'Tri@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Titik Suparti', 'email' => 'Titik@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Yuni Astuti', 'email' => 'Yuni@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Purbasari', 'email' => 'Purbasari@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Ratna Anggraeni', 'email' => 'Ratna@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Hikmah', 'email' => 'Hikmah@app.com', 'password' => bcrypt('password'), 'role' => 'bidan'],
            ['name' => 'Hartiningsih', 'email' => 'Hartiningsih@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Lilis Iriyanti S', 'email' => 'Lilis@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Khomidatun', 'email' => 'Khomidatun@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Lidia Barus, Skep', 'email' => 'Lidia@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Ahmad Fitri', 'email' => 'Ahmad@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Dwi Karuniawan', 'email' => 'Dwik@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'C Peter', 'email' => 'Peter@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Khusnul', 'email' => 'Khusnul@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Sulas Anianingsih', 'email' => 'Sulas@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Lili Rufiani S', 'email' => 'Lili@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Wisnu Adhi Kurniawan ', 'email' => 'Wisnu@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Seno Aji P', 'email' => 'Seno@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Nicko Yudha S', 'email' => 'Nicko@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'Latif Fuad Nurul H', 'email' => 'Latif@app.com', 'password' => bcrypt('password'), 'role' => 'perawat'],
            ['name' => 'dr. Priyo Hadi S', 'email' => 'Priyo@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'drg. Rina Nurhayati', 'email' => 'Rina@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'Wiwik cahyani', 'email' => 'cahyani@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Agung Bahari M', 'email' => 'Agung@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'dr. Uswatun', 'email' => 'Uswatun@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
            ['name' => 'Sintya Ayu R Amd.Kes', 'email' => 'Sintya@app.com', 'password' => bcrypt('password'), 'role' => 'dokter'],
        ];

        foreach($data as $datum)
        {
            $a = User::create([
                'name' => $datum['name'],
                'email' => strtolower($datum['email']),
                'password' => $datum['password'],
            ]);

            $a->addRole($datum['role']);

        }
    }
}
