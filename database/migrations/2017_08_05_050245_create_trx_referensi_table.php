<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxReferensiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_referensi', function(Blueprint $table)
		{
			$table->string('referensi_cd', 20)->primary('trx_referensi_pkey');
			$table->string('reff_tp', 20)->nullable();
			$table->string('referensi_root', 20)->nullable();
			$table->string('referensi_nm', 100)->nullable();
			$table->string('dr_nm', 20)->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('info_01', 100)->nullable();
			$table->string('info_02', 100)->nullable();
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
		Schema::drop('trx_referensi');
	}

}
