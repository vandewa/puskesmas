<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxSettlementKasirTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_settlement_kasir', function(Blueprint $table)
		{
			$table->bigInteger('seqno', true);
			$table->decimal('amount', 19, 4)->nullable();
			$table->string('trx_tp', 20)->nullable();
			$table->text('note')->nullable();
			$table->integer('modi_id')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_settlement_kasir');
	}

}
