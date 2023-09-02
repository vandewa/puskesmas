<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxUnitMedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_unit_medis', function(Blueprint $table)
		{
			$table->string('medunit_cd', 20)->primary('trx_unit_medis_pkey');
			$table->string('medunit_nm', 100)->nullable();
			$table->string('medicalunit_tp', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('medunit_no', 20)->nullable();
			$table->integer('medunit_urut')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_unit_medis');
	}

}
