<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxBankdarahTransfusiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_bankdarah_transfusi', function(Blueprint $table)
		{
			$table->foreign('stock_cd', 'trx_bankdarah_stock_fkey')->references('stock_seq_no')->on('trx_bankdarah_stock')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_bankdarah_transfusi', function(Blueprint $table)
		{
			$table->dropForeign('trx_bankdarah_stock_fkey');
		});
	}

}
