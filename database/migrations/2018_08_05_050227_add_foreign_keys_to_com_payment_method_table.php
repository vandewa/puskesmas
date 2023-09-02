<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComPaymentMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_payment_method', function(Blueprint $table)
		{
			$table->foreign('bank_cd', 'fkcom_paymen514543')->references('bank_cd')->on('com_bank')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_payment_method', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_paymen514543');
		});
	}

}
