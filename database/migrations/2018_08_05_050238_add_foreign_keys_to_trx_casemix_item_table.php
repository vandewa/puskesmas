<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxCasemixItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_casemix_item', function(Blueprint $table)
		{
			$table->foreign('casemix_no', 'fk__trx_casem__casem__55808d7d')->references('casemix_no')->on('trx_casemix')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_casemix_item', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_casem__casem__55808d7d');
		});
	}

}
