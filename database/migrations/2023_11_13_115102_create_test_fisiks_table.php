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
        Schema::create('test_fisiks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lamaran_id');
            $table->string('lokasi')->nullable();
            $table->datetime('tanggal_mulai')->nullable();
            $table->datetime('tanggal_selesai')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_fisiks');
    }
};
