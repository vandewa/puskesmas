<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayat_kehamilans', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
            $table->string('persalinan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('jk')->nullable();
            $table->string('penolong')->nullable();
            $table->string('tempat')->nullable();
            $table->string('hidup_mati')->nullable();
            $table->string('bb')->nullable();
            $table->string('pb')->nullable();
            $table->string('komplikasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kehamilans');
    }
};
