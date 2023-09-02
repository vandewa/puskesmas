<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxJadwalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_jadwal', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('dr_cd', 20)->nullable();
			$table->string('medunit_cd', 20)->nullable();
			$table->string('day_tp', 20)->nullable();
			$table->time('time_start')->nullable();
			$table->time('time_end')->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('rs_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->integer('max_pasien')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_jadwal');
	}

}
