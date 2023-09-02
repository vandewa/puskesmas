<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComCurrencyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_currency', function(Blueprint $table)
		{
			$table->string('currency_cd', 20)->primary('com_currency_pkey');
			$table->string('currency_nm', 100)->nullable();
			$table->string('currency_symbol', 10)->nullable();
			$table->decimal('currency_rate', 15, 0)->nullable();
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
		Schema::drop('com_currency');
	}

}
