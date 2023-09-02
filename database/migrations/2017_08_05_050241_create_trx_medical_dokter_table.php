<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalDokterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_dokter', function(Blueprint $table)
		{
			$table->bigInteger('medical_dr_seqno', true);
			$table->string('medical_cd', 20);
			$table->string('dr_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('medical_note', 1000)->nullable();
			$table->string('trx_dr_tp', 20)->nullable();
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
		Schema::drop('trx_medical_dokter');
	}

}
