<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahColumnActiveStPadaTrxUnitMedisItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trx_unitmedis_item', function (Blueprint $table) {
            $table->boolean('active_st')->default(true);
            $table->string('cbg_tarif_tp')->nullable();
            $table->string('data_01')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trx_unitmedis_item', function (Blueprint $table) {
            //
        });
    }
}
