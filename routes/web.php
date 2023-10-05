<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Livewire\Pages\Pendaftaran;
use App\Livewire\Pages\Pasien\ListPasien;
use App\Livewire\Pages\Master\DataMedis\Spesialis;
use App\Livewire\Pages\Master\DataMedis\Dokter;

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
    Route::group(['prefix' => 'pasien', 'as' => 'pasien.'], function(){
        Route::get('list', ListPasien::class)->name('index');
    });
    Route::group(['prefix' => 'master', 'as' => 'master.'], function(){
        Route::get('spesialis', Spesialis::class)->name('spesialis');
        Route::get('dokter', Dokter::class)->name('dokter');
    });


});
