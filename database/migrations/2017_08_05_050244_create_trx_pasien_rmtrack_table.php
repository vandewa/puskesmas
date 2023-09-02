<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPasienRmtrackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_pasien_rmtrack', function(Blueprint $table)
		{
			$table->string('pasien_cd', 21)->primary('trx_pasien_rmtrack_pkey');
			$table->dateTime('datetime_trx')->nullable();
			$table->string('penerima_nm', 1000)->nullable();
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
		Schema::drop('trx_pasien_rmtrack');
	}

}
