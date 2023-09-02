<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvTransactionDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_transaction_detail', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('trx_cd', 10);
			$table->string('item_cd', 20)->nullable();
			$table->string('unit_cd', 20)->nullable();
			$table->decimal('trx_quantity', 10)->nullable();
			$table->string('currency_cd', 20)->nullable();
			$table->decimal('trx_amount', 10, 0)->nullable();
			$table->decimal('rate', 10, 0)->nullable();
			$table->string('note', 1000)->nullable();
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
		Schema::drop('inv_transaction_detail');
	}

}
