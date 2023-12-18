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
        Schema::create('pertumbuhans', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
            $table->string('lahir')->nullable();
            $table->string('tempat')->nullable();
            $table->string('penolong')->nullable();
            $table->string('anak_ke')->nullable();
            $table->string('bb')->nullable();
            $table->string('pb')->nullable();
            $table->string('kelainan')->nullable();
            $table->string('kelainan_keterangan')->nullable();
            $table->string('nutrisi')->nullable();
            $table->string('balik_badan')->nullable();
            $table->string('duduk')->nullable();
            $table->string('berdiri')->nullable();
            $table->string('berjalan')->nullable();
            $table->string('mengocel')->nullable();
            $table->string('berbicara')->nullable();
            $table->string('r_tumbuh_kembang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pertumbuhans');
    }
};
