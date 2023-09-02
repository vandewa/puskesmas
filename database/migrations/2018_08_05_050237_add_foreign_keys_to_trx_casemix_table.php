<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxCasemixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_casemix', function(Blueprint $table)
		{
			$table->foreign('casemix_tp_cd', 'fk__trx_casem__casem__5398450b')->references('casemix_tp_cd')->on('trx_casemix_standard')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('severity_cd', 'fk__trx_casem__sever__548c6944')->references('severity_cd')->on('trx_severity')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_casemix', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_casem__casem__5398450b');
			$table->dropForeign('fk__trx_casem__sever__548c6944');
		});
	}

}
