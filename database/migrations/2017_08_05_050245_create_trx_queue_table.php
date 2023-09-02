<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_queue', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('pasien_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->integer('queue_no')->nullable();
			$table->dateTime('estimate_time')->nullable();
			$table->string('medical_tp', 20)->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('medical_unit', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->bigInteger('jadwal_seqno')->nullable();
			$table->char('queue_st', 1)->nullable();
			$table->string('referensi_cd', 20)->nullable();
			$table->string('visit_tp', 20)->nullable();
			$table->string('rs_cd', 20)->nullable();
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
		Schema::drop('trx_queue');
	}

}
