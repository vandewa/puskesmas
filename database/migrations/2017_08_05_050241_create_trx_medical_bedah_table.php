<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalBedahTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_bedah', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd', 20)->nullable();
			$table->string('treatment_cd', 10)->nullable();
			$table->dateTime('datetime_start')->nullable();
			$table->dateTime('datetime_end')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->text('note')->nullable();
			$table->string('bedah_st', 20)->nullable();
			$table->string('medunit_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('pasien_cd', 20)->nullable();
			$table->string('ruang', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_medical_bedah');
	}

}
