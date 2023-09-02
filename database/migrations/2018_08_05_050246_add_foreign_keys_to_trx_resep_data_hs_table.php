<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxResepDataHsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_resep_data_hs', function(Blueprint $table)
		{
			// $table->foreign('medical_resep_seqno', 'fk__trx_resep__medic__6e4c3b47')->references('medical_resep_seqno')->on('trx_medical_resep_hs')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_resep_data_hs', function(Blueprint $table)
		{
			// $table->dropForeign('fk__trx_resep__medic__6e4c3b47');
		});
	}

}
