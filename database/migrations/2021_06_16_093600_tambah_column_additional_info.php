<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahColumnAdditionalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trx_unit_medis', function (Blueprint $table) {
            $table->string('medunit_cd_bpjs')->nullable();
            $table->string('data_mapcd')->nullable();
            $table->string('data_exst')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trx_unit_medis', function (Blueprint $table) {
            //
        });
    }
}
