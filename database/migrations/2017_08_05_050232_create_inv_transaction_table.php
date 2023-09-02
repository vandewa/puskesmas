<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvTransactionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_transaction', function(Blueprint $table)
		{
			$table->string('trx_cd', 10)->primary('inv_transaction_pkey');
			$table->string('trx_no', 50)->nullable();
			$table->integer('trx_year')->nullable();
			$table->decimal('trx_month', 2, 0)->nullable();
			$table->string('pos_cd', 20)->nullable();
			$table->string('inv_trx_cd', 20)->nullable();
			$table->string('vendor_cd', 100)->nullable();
			$table->dateTime('trx_date')->nullable();
			$table->string('entry_by', 100)->nullable();
			$table->dateTime('entry_date')->nullable();
			$table->string('note', 1000)->nullable();
			$table->char('inv_trx_st', 1)->nullable();
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
		Schema::drop('inv_transaction');
	}

}
