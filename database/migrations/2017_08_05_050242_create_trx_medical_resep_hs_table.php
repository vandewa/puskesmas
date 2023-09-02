<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalResepHsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_resep_hs', function(Blueprint $table)
		{
			$table->increments('medical_resep_seqno');
			$table->string('medical_cd', 20)->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('dr_nm', 100)->nullable();
			$table->string('pasien_cd', 20)->nullable();
			$table->string('pasien_nm', 100)->nullable();
			$table->dateTime('resep_date')->nullable();
			$table->string('resep_no', 50)->nullable();
			$table->text('resep')->nullable();
			$table->char('proses_st', 1)->nullable();
			$table->dateTime('proses_date')->nullable();
			$table->string('info_01', 1000)->nullable();
			$table->string('info_02', 1000)->nullable();
			$table->bigInteger('ref_proses_seqno');
			$table->string('kelas_cd', 20)->nullable();
			$table->string('pemberian_st', 20)->nullable();
			$table->integer('iter')->default(0);
			$table->integer('iter_count')->iter_count();
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
		Schema::drop('trx_medical_resep_hs');
	}

}
