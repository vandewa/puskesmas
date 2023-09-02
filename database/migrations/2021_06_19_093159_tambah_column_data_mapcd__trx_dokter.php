<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahColumnDataMapcdTrxDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trx_dokter', function (Blueprint $table) {
            $table->string('data_mapcd')->nullable();
            $table->string('paramedis_tp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trx_dokter', function (Blueprint $table) {
            //
        });
    }
}
