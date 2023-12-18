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
        Schema::create('kesehatan_reproduksi', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
            $table->string('riwayat_kb_tp')->nullable();
            $table->string('ket_kb')->nullable();
            $table->string('r_mens')->nullable();
            $table->string('menerche')->nullable();
            $table->string('siklus')->nullable();
            $table->string('lama')->nullable();
            $table->string('teratur')->nullable();
            $table->string('nyeri_haid')->nullable();
            $table->string('hpht')->nullable();
            $table->string('riwayat_kehamilan_tp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_reproduksi');
    }
};
