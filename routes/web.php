<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Bangsal;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kamar;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kelas;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\TempatTidur;
use App\Livewire\Pages\Master\DataMedis\Dokter;
use App\Livewire\Pages\Master\DataMedis\InstalasiMedis\Poliklinik;
use App\Livewire\Pages\Master\DataMedis\JenisPenyakit;
use App\Livewire\Pages\Master\DataMedis\Paramedis;
use App\Livewire\Pages\Pendaftaran;
use App\Livewire\Pages\Pasien\ListPasien;
use App\Livewire\Pages\Master\DataMedis\Spesialis;
use App\Livewire\Pages\Master\DataMedis\TindakanMedis;
use App\Livewire\Pages\Registrasi\RawatJalan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});


Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('pendaftaran/{id?}', Pendaftaran::class)->name('pendaftaran');
    Route::group(['prefix' => 'pasien', 'as' => 'pasien.'], function () {
        Route::get('list', ListPasien::class)->name('index');
    });
    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::get('spesialis', Spesialis::class)->name('spesialis');
        Route::get('dokter', Dokter::class)->name('dokter');
        Route::get('paramedis', Paramedis::class)->name('paramedis');
        Route::get('poliklinik', Poliklinik::class)->name('poliklinik');
        Route::get('tindakan-medis', TindakanMedis::class)->name('tindakan-medis');
        Route::get('jenis-penyakit', JenisPenyakit::class)->name('jenis-penyakit');
        Route::get('bangsal', Bangsal::class)->name('bangsal');
        Route::get('kelas', Kelas::class)->name('kelas');
        Route::get('kamar', Kamar::class)->name('kamar');
        Route::get('tempat-tidur', TempatTidur::class)->name('tempat-tidur');
    });

    Route::group(['prefix' => 'registrasi', 'as' => 'registrasi.'], function () {
        Route::get('rawat-jalan', RawatJalan::class);
    });


});