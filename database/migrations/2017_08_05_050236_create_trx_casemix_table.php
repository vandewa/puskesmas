<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCasemixTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_casemix', function(Blueprint $table)
		{
			$table->bigInteger('casemix_no', true);
			$table->string('icd_cd', 20);
			$table->string('severity_cd', 20);
			$table->string('casemix_nm', 100)->nullable();
			$table->string('casemix_tp_cd', 20)->nullable();
			$table->string('modi_id', 20);
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
		Schema::drop('trx_casemix');
	}

}
