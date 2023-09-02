<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepReturTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_retur', function(Blueprint $table)
		{
			$table->bigInteger('retur_seqno', true);
			$table->string('medical_cd', 20)->nullable();
			$table->string('pasien_cd', 20)->nullable();
			$table->string('pasien_nm', 100)->nullable();
			$table->dateTime('retur_date')->nullable();
			$table->bigInteger('ref_medical_resep_seqno')->nullable();
			$table->bigInteger('ref_medical_alkes_seqno')->nullable();
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
		Schema::drop('trx_resep_retur');
	}

}
