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
        Schema::create('tanda_vitals', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd');
            $table->string('pasien_cd');
            $table->string('td')->nullable();
            $table->string('n')->nullable();
            $table->string('p')->nullable();
            $table->string('suhu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanda_vitals');
    }
};
