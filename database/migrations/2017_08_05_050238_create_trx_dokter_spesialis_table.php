<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxDokterSpesialisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_dokter_spesialis', function(Blueprint $table)
		{
			$table->string('dr_cd', 20);
			$table->string('spesialis_cd', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['dr_cd','spesialis_cd'], 'trx_dokter_spesialis_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_dokter_spesialis');
	}

}
