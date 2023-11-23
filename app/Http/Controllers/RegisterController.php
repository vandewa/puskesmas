<?php

namespace App\Http\Controllers;

use App\Http\Requests\userCreateValidation;
use App\Jobs\kirimWhatsapp;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    public function konversi_nomor($nohp)
    {
        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(", "", $nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")", "", $nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".", "", $nohp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if (!preg_match('/[^+0-9]/', trim($nohp))) {
            // cek apakah no hp karakter 1-3 adalah +62
            if (substr(trim($nohp), 0, 3) == '+62') {
                $hp = trim($nohp);
            }
            // cek apakah no hp karakter 1 adalah 0
            elseif (substr(trim($nohp), 0, 1) == '0') {
                $hp = '+62' . substr(trim($nohp), 1);
            }
            return $hp ?? '';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userCreateValidation $request)
    {

        $password = Str::random(8);

        $nomor = $this->konversi_nomor($request->telepon);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $nomor,
            'password' => bcrypt($password)
        ]);

        $pesan = $request->name . ' telah terdaftar kedalam sistem LPK Marzuba Sejahtera Indonésia' . "\n" .
            'Username: ' . $request->email . "\n" .
            'Password : ' . $password . "\n" .
            'Gunakan link berikut untuk melengkapi akun Anda.'."\n" .
            url('/');

        kirimWhatsapp::dispatch($pesan, $nomor);

        return redirect(route('login'))->with('status', 'Silahkan cek WhatsApp Anda untuk melihat username dan password.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
