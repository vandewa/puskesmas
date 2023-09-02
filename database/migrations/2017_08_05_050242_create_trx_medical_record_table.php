<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_record', function(Blueprint $table)
		{
			$table->bigInteger('medical_record_seqno', true);
			$table->string('pasien_cd', 20);
			$table->string('icd_cd', 20)->nullable();
			$table->string('medical_cd', 20)->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->dateTime('datetime_record')->nullable();
			$table->text('anamnesa')->nullable();
			$table->text('medical_data')->nullable(); // diagnosa
			$table->string('rm_tp', 20)->nullable();
			$table->string('case_tp', 20)->nullable();
			$table->text('pemeriksaan_fisik')->nullable();
			$table->text('pemeriksaan_penunjang')->nullable();
			$table->text('medical_note')->nullable();
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
		Schema::drop('trx_medical_record');
	}

}
