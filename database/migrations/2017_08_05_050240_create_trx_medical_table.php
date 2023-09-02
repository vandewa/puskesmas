<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical', function(Blueprint $table)
		{
			$table->string('medical_cd', 20)->primary('trx_medical_pkey');
			$table->string('pasien_cd', 40);
			$table->string('dr_cd', 20)->nullable();
			$table->dateTime('datetime_in')->nullable();
			$table->dateTime('datetime_out')->nullable();
			$table->string('medical_tp', 20)->nullable();
			$table->string('medical_trx_st', 20)->nullable();
			$table->string('reff_tp', 20)->nullable();
			$table->string('referensi_cd', 20)->nullable();
			$table->string('visit_tp', 20)->nullable();
			$table->string('out_tp', 20)->nullable();
			$table->string('medical_root_cd', 20)->nullable();
			$table->string('medical_link_cd', 20)->nullable();
			$table->string('initial_data', 1000)->nullable();
			$table->string('medunit_cd', 20)->nullable();
			$table->string('ruang_cd', 20)->nullable();
			$table->char('emergency_st', 1)->nullable();
			$table->string('proses_st', 20)->nullable();
			$table->string('case_tp', 20)->nullable();
			$table->string('insurance_no_trx', 50)->nullable();
			$table->integer('queue_no')->nullable();
			$table->string('info_01', 20)->nullable();
			$table->string('info_02', 100)->nullable();
			$table->string('rs_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->dateTime('datetime_med_process')->nullable();
			$table->string('pasien_tp', 50)->nullable();
			$table->string('insurance_cd', 50)->nullable();
			$table->string('kunjungan_tp', 20)->nullable();
			$table->char('bayar_st', 1)->nullable();
			$table->string('ruang_link_cd', 20)->nullable();
			$table->string('dr_cd2', 20)->nullable();
			$table->bigInteger('jadwal_seqno')->nullable();
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
		Schema::drop('trx_medical');
	}

}
