<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalresepParamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medicalresep_param', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('medical_resep_seqno');
			$table->integer('resepparam_seqno')->nullable();
			$table->integer('jumlah')->nullable();
			$table->decimal('total_amount', 15, 0)->nullable();
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
		Schema::drop('trx_medicalresep_param');
	}

}
