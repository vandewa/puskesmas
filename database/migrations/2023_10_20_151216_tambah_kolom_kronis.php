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
        Schema::table('trx_medical', function (Blueprint $table) {
            $table->boolean('kronis')->nullable()->after('jadwal_seqno');
            $table->boolean('risiko_jatuh')->nullable()->after('kronis');
            $table->text('catatan')->nullable()->after('risiko_jatuh');
            $table->text('alergi')->nullable()->after('catatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trx_medical', function (Blueprint $table) {
            //
        });
    }
};
