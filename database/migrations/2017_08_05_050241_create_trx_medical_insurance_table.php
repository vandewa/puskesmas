<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalInsuranceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_insurance', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd', 20);
			$table->string('insurance_no_trx', 50)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->dateTime('reff_datetime')->nullable();
			$table->string('reff_insurance_notrx', 50)->nullable();
			$table->string('referensi_cd', 20)->nullable();
			$table->string('referensi_nm', 100)->nullable();
			$table->string('reff_icd_cd', 20)->nullable();
			$table->string('reff_icd_nm', 1000)->nullable();
			$table->string('member_tp', 100)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('info_01', 100)->nullable();
			$table->string('info_02', 100)->nullable();
			$table->integer('print_no')->nullable();
			$table->string('trx_st', 20)->nullable();
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
		Schema::drop('trx_medical_insurance');
	}

}
