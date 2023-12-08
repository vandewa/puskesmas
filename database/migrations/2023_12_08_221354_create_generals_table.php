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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd');
            $table->string('pasien_cd');
            $table->string('kepala')->nullable();
            $table->string('mata')->nullable();
            $table->string('teling')->nullable();
            $table->string('leher')->nullable();
            $table->string('dada')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('extremistis')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
