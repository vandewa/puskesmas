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
        Schema::table('trx_kamar', function (Blueprint $table) {
            $table->string('jumlah_tt')->after('kelas_cd')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trx_kamar', function (Blueprint $table) {
            //
        });
    }
};