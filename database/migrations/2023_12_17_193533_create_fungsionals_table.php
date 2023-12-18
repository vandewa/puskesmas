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
        Schema::create('fungsionals', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
            $table->string('kognitif_tp')->nullable();
            $table->string('penglihatan_tp')->nullable();
            $table->string('pendengaran_tp')->nullable();
            $table->string('aktifitas_tp')->nullable();
            $table->string('berjalan_tp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fungsionals');
    }
};
