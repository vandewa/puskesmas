<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepRacikTempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_racik_temp', function(Blueprint $table)
		{
			$table->integer('seq_no', true);
			$table->bigInteger('resep_seqno');
			$table->string('item_cd', 20);
			$table->float('quantity', 10, 0);
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
		Schema::drop('trx_resep_racik_temp');
	}

}
