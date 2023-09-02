<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_tindakan', function(Blueprint $table)
		{
			$table->bigInteger('medical_tindakan_seqno', true);
			$table->string('medical_cd', 20);
			$table->string('treatment_cd', 20)->nullable();
			$table->string('icd_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('dr2_cd', 20)->nullable();
			$table->string('file_report', 100)->nullable();
			$table->string('medical_note', 1000)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->char('treatment_st', 1)->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('medunit_cd', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->char('diskon_st')->nullable();
			$table->decimal('diskon_percent', 10, 0)->nullable();
			$table->decimal('amount', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_medical_tindakan');
	}

}
