<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepDataTempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_data_temp', function(Blueprint $table)
		{
			$table->integer('resep_seqno', true);
			$table->bigInteger('medical_resep_seqno');
			$table->string('item_cd', 20);
			$table->string('data_nm', 1000);
			$table->float('quantity', 10, 0);
			$table->float('price', 10, 0)->nullable();
			$table->string('resep_tp', 20);
			$table->string('info_01', 100);
			$table->string('info_02', 100)->nullable();
			$table->float('num_01', 10, 0)->nullable();
			$table->float('num_02', 10, 0)->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('modi_id', 20);
			$table->dateTime('modi_datetime');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_resep_data_temp');
	}

}
