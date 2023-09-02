<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTindakanParamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tindakan_paramedis', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('treatment_cd', 20);
			$table->string('spesialis_cd', 20)->nullable();
			$table->string('paramedis_tp', 20)->nullable();
			$table->string('paramedis_role', 20)->nullable();
			$table->integer('total_person')->nullable();
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
		Schema::drop('trx_tindakan_paramedis');
	}

}
