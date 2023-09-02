<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_unit', function(Blueprint $table)
		{
			$table->bigInteger('medical_unit_seqno', true);
			$table->string('medical_cd', 20);
			$table->string('group_no', 20)->nullable();
			$table->string('medicalunit_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('dr2_cd', 20)->nullable();
			$table->string('file_report', 100)->nullable();
			$table->text('medical_note')->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable()->default('');
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('cito_st', 1)->nullable();
			$table->string('alamat_rujuk')->nullable();
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
		Schema::drop('trx_medical_unit');
	}

}
