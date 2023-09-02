<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxBankdarahTransfusiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_bankdarah_transfusi', function(Blueprint $table)
		{
			$table->bigInteger('transfusi_seq_no', true);
			$table->bigInteger('stock_cd');
			$table->string('medical_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->text('note')->nullable();
			$table->string('modi_id', 20)->nullable();
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
		Schema::drop('trx_bankdarah_transfusi');
	}

}
