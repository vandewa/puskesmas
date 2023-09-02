<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCasemixStandardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_casemix_standard', function(Blueprint $table)
		{
			$table->string('casemix_tp_cd', 20)->primary('trx_casemix_standard_pkey');
			$table->string('casemix_tp_nm', 100)->nullable();
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
		Schema::drop('trx_casemix_standard');
	}

}
