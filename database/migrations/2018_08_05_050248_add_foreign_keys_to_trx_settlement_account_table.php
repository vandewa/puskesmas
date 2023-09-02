<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxSettlementAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_settlement_account', function(Blueprint $table)
		{
			$table->foreign('settlement_no', 'fk__trx_settl__settl__7310f064')->references('settlement_no')->on('trx_settlement')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_settlement_account', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_settl__settl__7310f064');
		});
	}

}
