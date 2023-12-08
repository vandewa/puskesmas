<?php

use App\Livewire\Pages\Keuangan\ListPasienKeuangan;
use App\Livewire\Pages\Transaksi\KajianAwal;
use App\Livewire\Pages\Transaksi\ListPasienTransaksiRawatInap;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HelperController;
use App\Livewire\Pages\Keuangan\ProsesPembayaran;
use App\Livewire\Pages\Pendaftaran;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Bangsal;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kamar;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kelas;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\TempatTidur;
use App\Livewire\Pages\Master\DataMedis\Dokter;
use App\Livewire\Pages\Master\DataMedis\JadwalPraktek;
use App\Livewire\Pages\Master\DataMedis\JenisPenyakit;
use App\Livewire\Pages\Master\DataMedis\ListJadwalPraktek;
use App\Livewire\Pages\Master\DataMedis\Paramedis;
use App\Livewire\Pages\Master\DataMedis\TindakanMedis;
use App\Livewire\Pages\Master\DataMedis\Spesialis;
use App\Livewire\Pages\Master\DataMedis\InstalasiMedis\Poliklinik;
use App\Livewire\Pages\Master\DataMedis\InstalasiMedis\Laboratorium;
use App\Livewire\Pages\Master\DataMedis\InstalasiMedis\Radiologi;
use App\Livewire\Pages\Pasien\ListPasien;
use App\Livewire\Pages\Registrasi\RawatJalan;
use App\Livewire\Pages\Registrasi\RawatInap;
use App\Livewire\Pages\Master\DataInventori\Golongan;
use App\Livewire\Pages\Master\DataInventori\Inventori;
use App\Livewire\Pages\Master\DataInventori\Kelompok;
use App\Livewire\Pages\Master\DataInventori\ListInventori;
use App\Livewire\Pages\Master\DataInventori\ListPrincipal;
use App\Livewire\Pages\Master\DataInventori\ListSupplier;
use App\Livewire\Pages\Master\DataInventori\ListTipe;
use App\Livewire\Pages\Master\DataInventori\Principal;
use App\Livewire\Pages\Master\DataInventori\Supplier;
use App\Livewire\Pages\Master\DataInventori\Tipe;
use App\Livewire\Pages\Master\DataInventori\UnitSatuan;
use App\Livewire\Pages\Master\DataMedis\Tarif\General;
use App\Livewire\Pages\Master\DataUmum\DataPuskesmas;
use App\Livewire\Pages\Transaksi\ListPasienTransaksi;
use App\Livewire\Pages\Transaksi\DetailRawatJalan;
use App\Livewire\Pages\Transaksi\NavbarDetailRawatJalan;
use App\Livewire\Pages\Transaksi\RekamMedis;
use App\Livewire\Pages\Transaksi\ResepObat;
use App\Livewire\Pages\Transaksi\TindakanMedis as TransaksiTindakanMedis;
use App\Livewire\Pages\Master\DataMedis\Tarif\Paramedis as TarifParamedis;
use App\Livewire\Pages\Master\DataMedis\Tarif\Kelas as TarifKelas;
use App\Livewire\Pages\Master\DataMedis\Tarif\UnitMedis;
use App\Livewire\Pages\Master\DataMedis\Tarif\TindakanMedis as TarifTindakanMedis;
use App\Livewire\Pages\Master\DataMedis\Tarif\Inventori as TarifInventori;
use App\Livewire\Pages\Transaksi\DataTransaksi;
use App\Livewire\Pages\Transaksi\KajianLanjutan;
use App\Livewire\Pages\Transaksi\LaboratoriumTransaksi;
use App\Livewire\Pages\Transaksi\RadiologiTransaksi;

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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});
Route::get('a', function () {
    return File::get(public_path() . '/a.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'pasien', 'as' => 'pasien.'], function () {
        Route::get('list', ListPasien::class)->name('index');
        Route::get('pendaftaran/{id?}', Pendaftaran::class)->name('pendaftaran');
    });
    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::get('spesialis', Spesialis::class)->name('spesialis');
        Route::get('dokter', Dokter::class)->name('dokter');
        Route::get('paramedis', Paramedis::class)->name('paramedis');
        Route::get('poliklinik', Poliklinik::class)->name('poliklinik');
        Route::get('laboratorium', Laboratorium::class)->name('laboratorium');
        Route::get('radiologi', Radiologi::class)->name('radiologi');
        Route::get('tindakan-medis', TindakanMedis::class)->name('tindakan-medis');
        Route::get('jenis-penyakit', JenisPenyakit::class)->name('jenis-penyakit');
        Route::get('bangsal', Bangsal::class)->name('bangsal');
        Route::get('kelas', Kelas::class)->name('kelas');
        Route::get('kamar', Kamar::class)->name('kamar');
        Route::get('tempat-tidur', TempatTidur::class)->name('tempat-tidur');
        Route::get('jadwal-praktek/{id?}', JadwalPraktek::class)->name('jadwal-praktek');
        Route::get('list-jadwal-praktek', ListJadwalPraktek::class)->name('jadwal-praktek.index');
        Route::get('data-puskesmas', DataPuskesmas::class)->name('data-puskesmas');
        Route::get('inventori/{id?}', Inventori::class)->name('inventori');
        Route::get('list-inventori', ListInventori::class)->name('inventori.index');
        Route::get('unit-satuan', UnitSatuan::class)->name('unit-satuan');
        Route::get('principal/{id?}', Principal::class)->name('principal');
        Route::get('list-principal', ListPrincipal::class)->name('principal.index');
        Route::get('supplier/{id?}', Supplier::class)->name('supplier');
        Route::get('list-supplier', ListSupplier::class)->name('supplier.index');
        Route::get('tipe', Tipe::class)->name('tipe');
        Route::get('kelompok', Kelompok::class)->name('kelompok');
        Route::get('golongan', Golongan::class)->name('golongan');
        Route::get('list-tipe', ListTipe::class)->name('tipe-inventori.index');

        Route::group(['prefix' => 'tarif', 'as' => 'tarif.'], function () {
            Route::get('general', General::class)->name('general');
            Route::get('paramedis', TarifParamedis::class)->name('paramedis');
            Route::get('unit-medis', UnitMedis::class)->name('unit-medis');
            Route::get('kelas', TarifKelas::class)->name('kelas');
            Route::get('tindakan-medis', TarifTindakanMedis::class)->name('tindakan-medis');
            Route::get('inventori', TarifInventori::class)->name('inventori');
        });


    });

    Route::group(['prefix' => 'transaksi', 'as' => 'transaksi.'], function () {
        Route::get('kajian-awal/{id?}', KajianAwal::class)->name('kajian-awal');
        Route::get('kajian-lanjutan/{id?}', KajianLanjutan::class)->name('kajian-lanjutan');
        Route::group(['prefix' => 'rawat-jalan', 'as' => 'rawat-jalan.'], function () {
            Route::get('list/{url?}', ListPasienTransaksi::class)->name('list');
            Route::get('detail/{id?}', NavbarDetailRawatJalan::class)->name('detail.rawat-jalan');
            Route::get('rekam-medis/{id?}', RekamMedis::class)->name('rekam-medis');
            Route::get('data-transaksi/{id?}', DataTransaksi::class)->name('data-transaksi');
            Route::get('resep-obat/{id?}', ResepObat::class)->name('resep-obat');
            Route::get('laboratorium/{id?}', LaboratoriumTransaksi::class)->name('laboratorium');
            Route::get('radiologi/{id?}', RadiologiTransaksi::class)->name('radiologi');
            Route::get('tindakan-medis/{id?}', TransaksiTindakanMedis::class)->name('tindakan-medis');
        });

        Route::group(['prefix' => 'rawat-inap', 'as' => 'rawat-inap.'], function () {
            Route::get('kajian-lanjutan/{id?}', KajianLanjutan::class)->name('kajian-lanjutan');
            Route::get('list/{url?}', ListPasienTransaksiRawatInap::class)->name('list');
            Route::get('detail/{id?}', NavbarDetailRawatJalan::class)->name('detail.rawat-jalan');
            Route::get('rekam-medis/{id?}', RekamMedis::class)->name('rekam-medis');
            Route::get('data-transaksi/{id?}', DataTransaksi::class)->name('data-transaksi');
            Route::get('resep-obat/{id?}', ResepObat::class)->name('resep-obat');
            Route::get('laboratorium/{id?}', LaboratoriumTransaksi::class)->name('laboratorium');
            Route::get('radiologi/{id?}', RadiologiTransaksi::class)->name('radiologi');
            Route::get('tindakan-medis/{id?}', TransaksiTindakanMedis::class)->name('tindakan-medis');
        });
    });

    Route::group(['prefix' => 'registrasi', 'as' => 'registrasi.'], function () {
        Route::get('rawat-jalan/{id?}', RawatJalan::class)->name('rawat-jalan');
        Route::get('rawat-inap/{id?}', RawatInap::class)->name('rawat-inap');
    });

    Route::get('detail', NavbarDetailRawatJalan::class)->name('detail.rawat-jalan');

    Route::group(['prefix' => 'helper', 'as' => 'helper.'], function () {
        Route::get('print-antrian-poli/{id?}', [HelperController::class, 'printAntrianPoli'])->name('print-antrian-poli');
        Route::get('print-kwitansi/{id?}', [HelperController::class, 'cetakInvoice'])->name('cetak-invoice');
    });

    Route::group(['prefix' => 'keuangan', 'as' => 'keuangan.'], function () {
        Route::group(['prefix' => 'proses-pembayaran', 'as' => 'proses-pembayaran.'], function () {
            Route::group(['prefix' => 'rawat-jalan', 'as' => 'rawat-jalan.'], function () {
                Route::get('list/{url?}', ListPasienKeuangan::class)->name('list');
                Route::get('proses/{id?}', ProsesPembayaran::class)->name('proses');

            });
            Route::group(['prefix' => 'rawat-inap', 'as' => 'rawat-inap.'], function () {
                Route::get('list/{url?}', ListPasienKeuangan::class)->name('list');
                Route::get('proses/{id?}', ProsesPembayaran::class)->name('proses');
            });
        });
    });


});
