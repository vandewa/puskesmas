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
        Schema::create('trx_cppts', function (Blueprint $table) {
            $table->id();
            $table->string('medical_cd');
            $table->string('dr_cd')->nullable();
            $table->string('paramedis_cd')->nullable();
            $table->longText('subject')->nullable();
            $table->longText('objective')->nullable();
            $table->longText('assesment')->nullable();
            $table->longText('plan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_cppts');
    }
};
