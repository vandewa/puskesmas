<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kajian_awals', function (Blueprint $table) {
            $table->id();
            $table->string('pasien_cd')->nullable();
            $table->string('subyektif_tp')->nullable();
            $table->string('r_alergi_obat')->nullable();
            $table->string('r_alergi_obat_ket')->nullable();
            $table->string('r_alergi_makanan')->nullable();
            $table->string('r_alergi_makanan_ket')->nullable();
            $table->string('r_penyakit_dahulu')->nullable();
            $table->string('r_penyakit_dahulu_ket')->nullable();
            $table->string('r_penyakit_keluarga')->nullable();
            $table->string('r_penyakit_keluarga_ket')->nullable();
            $table->string('bicara_tp')->nullable();
            $table->string('komunikasi_tp')->nullable();
            $table->string('emosional_st')->nullable();
            $table->string('sosiologi_tp')->nullable();
            $table->string('riwayat_kb_tp')->nullable();
            $table->string('kehamilan_tp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kajian_awals');
    }
};
