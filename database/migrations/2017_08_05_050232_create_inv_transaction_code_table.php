<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvTransactionCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_transaction_code', function(Blueprint $table)
		{
			$table->string('inv_trx_cd', 20)->primary('inv_transaction_code_pkey');
			$table->string('inv_trx_nm', 100)->nullable();
			$table->string('move_tp', 20)->nullable();
			$table->string('inv_trx_tp', 20)->nullable();
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
		Schema::drop('inv_transaction_code');
	}

}
