<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvTransactionDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_transaction_detail', function(Blueprint $table)
		{
			$table->foreign('trx_cd', 'fk__inv_trans__trx_c__4ceb477c')->references('trx_cd')->on('inv_transaction')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_transaction_detail', function(Blueprint $table)
		{
			$table->dropForeign('fk__inv_trans__trx_c__4ceb477c');
		});
	}

}
