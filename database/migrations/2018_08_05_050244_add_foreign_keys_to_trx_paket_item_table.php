<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxPaketItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_paket_item', function(Blueprint $table)
		{
			$table->foreign('paket_cd', 'fk__trx_paket__paket__679f3db8')->references('paket_cd')->on('trx_paket')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_paket_item', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_paket__paket__679f3db8');
		});
	}

}
