<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPasienInsuranceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_pasien_insurance', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('pasien_cd', 21);
			$table->string('insurance_cd', 20)->nullable();
			$table->string('insurance_member_cd', 20)->nullable();
			$table->string('insurance_tp', 20)->nullable();
			$table->string('insurance_no', 50)->nullable();
			$table->string('insurance_no_trx', 50)->nullable();
			$table->string('standar_kelas_cd', 20)->nullable();
			$table->char('default_st', 1)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->dateTime('expired_date')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_pasien_insurance');
	}

}
