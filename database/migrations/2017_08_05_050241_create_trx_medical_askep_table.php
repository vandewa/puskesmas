<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalAskepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_askep', function(Blueprint $table)
		{
			$table->bigInteger('medical_askep_seqno', true);
			$table->string('medical_cd', 20);
			$table->string('askep_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('file_report', 100)->nullable();
			$table->text('medical_note')->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
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
		Schema::drop('trx_medical_askep');
	}

}
