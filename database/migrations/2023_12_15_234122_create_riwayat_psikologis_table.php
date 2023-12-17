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
        Schema::create('riwayat_psikologis', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd')->nullable();
            $table->string('pasien_cd')->nullable();
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
        Schema::dropIfExists('riwayat_psikologis');
    }
};
