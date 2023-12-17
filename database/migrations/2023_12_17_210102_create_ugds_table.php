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
        Schema::create('ugds', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
            $table->string('alasan_datang_tp')->nullable();
            $table->dateTime('tgl_kejadian')->nullable();
            $table->dateTime('tiba')->nullable();
            $table->string('transportasi')->nullable();
            $table->string('kasus_tp')->nullable();
            $table->string('mobilitas_tp')->nullable();
            $table->string('kesadaran_tp')->nullable();
            $table->string('gcs')->nullable();
            $table->string('trauma')->nullable();
            $table->string('triase')->nullable();
            $table->string('t_resusitasi')->nullable();
            $table->string('ket_alasan_datang')->nullable();
            $table->string('ket_kasus')->nullable();
            $table->string('ket_transportasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ugds');
    }
};
