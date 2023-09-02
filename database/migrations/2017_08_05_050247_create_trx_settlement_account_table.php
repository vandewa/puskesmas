<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxSettlementAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_settlement_account', function(Blueprint $table)
		{
			$table->bigInteger('settlement_no');
			$table->string('account_cd', 20);
			$table->decimal('amount', 15, 0)->nullable();
			$table->decimal('discount_percent', 10)->nullable();
			$table->decimal('discount_amount', 15, 0)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['settlement_no','account_cd'], 'trx_settlement_account_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_settlement_account');
	}

}
