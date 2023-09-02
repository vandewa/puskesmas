<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxReturDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_retur_data', function(Blueprint $table)
		{
			$table->foreign('retur_seqno', 'fk__trx_retur__retur__7128a7f2')->references('retur_seqno')->on('trx_resep_retur')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_retur_data', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_retur__retur__7128a7f2');
		});
	}

}
