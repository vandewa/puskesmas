<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComPaymentMethodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_payment_method', function(Blueprint $table)
		{
			$table->string('payment_cd', 20)->primary('com_payment_method_pkey');
			$table->string('payment_nm', 100)->nullable();
			$table->string('bank_cd', 20)->nullable();
			$table->decimal('persen_charge', 5)->nullable();
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
		Schema::drop('com_payment_method');
	}

}
