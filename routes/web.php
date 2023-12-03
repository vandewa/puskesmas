<?php

use App\Livewire\Demo\Dokumen;
use App\Livewire\Demo\Lamaran;
use App\Livewire\Demo\DataDiri;
use App\Livewire\Demo\Admin\Tes;
use App\Livewire\Demo\DataPribadi;
use App\Livewire\Demo\LamaranPage;
use App\Livewire\Demo\Admin\Magang;
use App\Livewire\Demo\TampilanPengguna;
use App\Livewire\Pages\Pendaftaran;
use App\Livewire\Demo\Admin\McuPage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Livewire\Demo\Admin\Wawancara;
use App\Livewire\Demo\Admin\Pendidikan;
// use App\Livewire\Demo\DataKeluarga\Anak;
use App\Livewire\Pages\Pasien\ListPasien;
use App\Http\Controllers\HelperController;
use App\Livewire\Demo\Admin\Keberangkatan;
use App\Livewire\Demo\Admin\SeleksiBerkas;
use App\Livewire\Demo\RiwayatHidup\Kursus;
use App\Livewire\Demo\DataKeluarga\Kenalan;
use App\Livewire\Demo\DataKeluarga\Saudara;
use App\Livewire\Demo\RiwayatHidup\Sekolah;
use App\Livewire\Pages\Transaksi\ResepObat;
use App\Http\Controllers\RegisterController;
use App\Livewire\Demo\Admin\PengursanBerkas;
use App\Livewire\Demo\DataKeluarga\Orangtua;
use App\Livewire\Pages\Registrasi\RawatInap;
use App\Livewire\Pages\Transaksi\RekamMedis;
use App\Http\Controllers\DashboardController;
use App\Livewire\Demo\RiwayatHidup\Referensi;
use App\Livewire\Pages\Registrasi\RawatJalan;
use App\Livewire\Demo\Admin\WawancaraPengguna;
use App\Livewire\Demo\AktivasiPage;
use App\Livewire\Demo\AktivasiUserPage;
use App\Livewire\Demo\DataKeluarga\Anak;
use App\Livewire\Demo\DataKeluarga\SuamiIstri;
use App\Livewire\Pages\Master\DataMedis\Dokter;
use App\Livewire\Demo\DataKeluarga\DataKeluarga;
use App\Livewire\Demo\RiwayatHidup\RiwayatHidup;
use App\Livewire\Demo\DataKeluarga\ListTransaksi;
use App\Livewire\Demo\KeteranganLain;
use App\Livewire\Demo\Master\LayananPage;
use App\Livewire\Demo\PenggunaPage;
use App\Livewire\Pages\Master\DataMedis\Paramedis;
use App\Livewire\Pages\Master\DataMedis\Spesialis;
use App\Livewire\Pages\Transaksi\DetailRawatJalan;
use App\Livewire\Demo\RiwayatHidup\PengalamanKerja;
use App\Livewire\Pages\Transaksi\ListPasienTransaksi;
use App\Livewire\Pages\Master\DataMedis\JadwalPraktek;
use App\Livewire\Pages\Master\DataMedis\JenisPenyakit;
use App\Livewire\Pages\Master\DataMedis\TindakanMedis;
use App\Livewire\Demo\RiwayatHidup\PengalamanLuarNegeri;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kamar;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Kelas;
use App\Livewire\Pages\Transaksi\NavbarDetailRawatJalan;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\Bangsal;
use App\Livewire\Pages\Master\DataMedis\ListJadwalPraktek;
use App\Livewire\Demo\RiwayatHidup\PengalamanBerorganisasi;
use App\Livewire\Pages\Master\DataMedis\Akomodasi\TempatTidur;
use App\Livewire\Pages\Master\DataMedis\InstalasiMedis\Poliklinik;

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

Route::resource('register', RegisterController::class);

Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', LamaranPage::class);
    Route::get('/dashboard', LamaranPage::class)->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
       Route::group(['prefix' => 'master'], function(){
            Route::get('layanan', LayananPage::class)->name('layanan');
       });
        Route::get('aktivasi-user', AktivasiUserPage::class)->name('aktivasi-user');
        Route::get('seleksi-berkas', SeleksiBerkas::class)->name('seleksi-berkas');
        Route::get('tes', Tes::class)->name('tes');
        Route::get('wawancara', Wawancara::class)->name('wawancara');
        Route::get('mcu', McuPage::class)->name('mcu');
        Route::get('pendidikan', Pendidikan::class)->name('pendidikan');
        Route::get('wawancara-user', WawancaraPengguna::class)->name('wawancara.user');
        Route::get('pengurusan-berkas', PengursanBerkas::class)->name('pengurusan.berkas');
        Route::get('keberangkatan', Keberangkatan::class)->name('keberangkatan');
        Route::get('magang', Magang::class)->name('magang');
        Route::get('pengguna', PenggunaPage::class)->name('pengguna');
    });

    Route::group(['prefix' => 'pasien', 'as' => 'pasien.'], function () {
        Route::get('list', ListPasien::class)->name('index');
        Route::get('pendaftaran/{id?}', Pendaftaran::class)->name('pendaftaran');
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
        Route::get('jadwal-praktek/{id?}', JadwalPraktek::class)->name('jadwal-praktek');
        Route::get('list-jadwal-praktek', ListJadwalPraktek::class)->name('jadwal-praktek.index');
    });

    Route::group(['prefix' => 'transaksi', 'as' => 'transaksi.'], function () {
        Route::group(['prefix' => 'rawat-jalan', 'as' => 'rawat-jalan.'], function () {
            Route::get('list/{url?}', ListPasienTransaksi::class)->name('list');
            Route::get('detail/{id?}', NavbarDetailRawatJalan::class)->name('detail.rawat-jalan');
            Route::get('rekam-medis', RekamMedis::class)->name('rekam-medis');
            Route::get('resep-obat/{id?}', ResepObat::class)->name('resep-obat');
        });
    });

    Route::group(['prefix' => 'registrasi', 'as' => 'registrasi.'], function () {
        Route::get('rawat-jalan/{id?}', RawatJalan::class)->name('rawat-jalan');
        Route::get('rawat-inap/{id?}', RawatInap::class)->name('rawat-inap');
    });

    Route::get('detail', NavbarDetailRawatJalan::class)->name('detail.rawat-jalan');
    Route::get('rekam-medis', RekamMedis::class)->name('rekam-medis');

    Route::group(['prefix' => 'helper', 'as' => 'helper.'], function () {
        Route::get('print-antrian-poli/{id?}', [HelperController::class, 'printAntrianPoli'])->name('print-antrian-poli');
    });

    Route::group(['prefix' => 'pendaftaran', 'as' => 'pendaftaran.'], function () {
        Route::get('list/{url?}', ListTransaksi::class)->name('list');
        Route::get('data-diri/{id?}', DataDiri::class)->name('data-diri');
        Route::get('data-keluarga/{id?}', SuamiIstri::class)->name('data-keluarga');
        Route::get('suami-istri/{id?}', SuamiIstri::class)->name('suami-istri');
        Route::get('anak/{id?}', Anak::class)->name('anak');
        Route::get('orangtua/{id?}', Orangtua::class)->name('orangtua');
        Route::get('saudara/{id?}', Saudara::class)->name('saudara');
        Route::get('kenalan/{id?}', Kenalan::class)->name('kenalan');
        Route::get('data-pribadi/{id?}', DataPribadi::class)->name('data-pribadi');
        Route::get('riwayat-hidup/{id?}', RiwayatHidup::class)->name('riwayat-hidup');
        Route::get('sekolah/{id?}', Sekolah::class)->name('sekolah');
        Route::get('kursus/{id?}', Kursus::class)->name('kursus');
        Route::get('referensi/{id?}', Referensi::class)->name('referensi');
        Route::get('pengalaman-kerja/{id?}', PengalamanKerja::class)->name('pengalaman-kerja');
        Route::get('pengalaman-luar-negeri/{id?}', PengalamanLuarNegeri::class)->name('pengalaman-luar-negeri');
        Route::get('pengalaman-berorganisasi/{id?}', PengalamanBerorganisasi::class)->name('pengalaman-berorganisasi');
        Route::get('dokumen/{id?}', Dokumen::class)->name('dokumen');
        Route::get('aktivasi', AktivasiPage::class)->name('aktivasi');
        Route::get('keterangan-lain/{id?}', KeteranganLain::class)->name('keterangan-lain');
        Route::get('detail-pengguna/{id?}', TampilanPengguna::class)->name('detail-pengguna');
    });


});
