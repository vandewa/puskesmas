<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxResepDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_resep_data', function(Blueprint $table)
		{
			// $table->foreign('medical_resep_seqno', 'fk__trx_resep__medic__6d58170e')->references('medical_resep_seqno')->on('trx_medical_resep')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_resep_data', function(Blueprint $table)
		{
			// $table->dropForeign('fk__trx_resep__medic__6d58170e');
		});
	}

}
