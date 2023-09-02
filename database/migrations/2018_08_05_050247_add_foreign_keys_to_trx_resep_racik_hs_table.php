<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxResepRacikHsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_resep_racik_hs', function(Blueprint $table)
		{
			$table->foreign('resep_seqno', 'fk__trx_resep__resep__703483b9')->references('resep_seqno')->on('trx_resep_data_hs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_resep_racik_hs', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_resep__resep__703483b9');
		});
	}

}
