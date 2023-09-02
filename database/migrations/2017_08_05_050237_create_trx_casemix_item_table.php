<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCasemixItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_casemix_item', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('casemix_no');
			$table->string('data_cd', 20)->nullable();
			$table->string('data_nm', 1000)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
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
		Schema::drop('trx_casemix_item');
	}

}
