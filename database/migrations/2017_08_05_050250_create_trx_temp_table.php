<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTempTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_temp', function(Blueprint $table)
		{
			$table->string('data_10', 20)->nullable();
			$table->string('data_11', 100)->nullable();
			$table->string('data_12', 100)->nullable();
			$table->string('data_13', 100)->nullable();
			$table->string('data_14', 100)->nullable();
			$table->string('data_15', 100)->nullable();
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
		Schema::drop('trx_temp');
	}

}
