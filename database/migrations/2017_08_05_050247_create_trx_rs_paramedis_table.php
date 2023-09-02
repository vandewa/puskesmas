<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxRsParamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_rs_paramedis', function(Blueprint $table)
		{
			$table->string('rs_cd', 20);
			$table->string('paramedis_cd', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['rs_cd','paramedis_cd'], 'trx_rs_paramedis_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_rs_paramedis');
	}

}
