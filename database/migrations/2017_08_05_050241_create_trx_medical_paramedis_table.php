<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalParamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_paramedis', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('ref_proses_seqno')->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('paramedis_cd', 20)->nullable();
			$table->string('paramedis_role', 20)->nullable();
			$table->string('proses_tp', 20)->nullable();
			$table->string('note', 1000)->nullable();
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
		Schema::drop('trx_medical_paramedis');
	}

}
