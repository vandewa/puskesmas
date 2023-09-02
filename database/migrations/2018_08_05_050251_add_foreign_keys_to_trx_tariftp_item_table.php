<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxTariftpItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_tariftp_item', function(Blueprint $table)
		{
			$table->foreign('tariftp_no', 'fktrx_tarift782628')->references('tariftp_no')->on('trx_tarif_tp')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_tariftp_item', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_tarift782628');
		});
	}

}
