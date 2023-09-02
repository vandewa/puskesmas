<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxParamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_paramedis', function(Blueprint $table)
		{
			$table->string('paramedis_cd', 20)->primary('trx_paramedis_pkey');
			$table->string('paramedis_nm', 100)->nullable();
			$table->string('paramedis_tp', 20)->nullable();
			$table->char('paramedis_st', 1)->nullable();
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
		Schema::drop('trx_paramedis');
	}

}
