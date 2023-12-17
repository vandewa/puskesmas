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
        Schema::create('data_kesehatans', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kesehatans');
    }
};
