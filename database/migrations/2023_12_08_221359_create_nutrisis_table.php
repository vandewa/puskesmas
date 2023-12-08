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
        Schema::create('nutrisis', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd');
            $table->string('pasien_cd');
            $table->integer('berat')->nullable();
            $table->integer('tinggi')->nullable();
            $table->integer('imt')->nullable();
            $table->integer('lingkar_perut')->nullable();
            $table->integer('lila')->nullable();
            $table->string('status_gizi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrisis');
    }
};
