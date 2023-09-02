<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxRsDokterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_rs_dokter', function(Blueprint $table)
		{
			$table->string('rs_cd', 20);
			$table->string('dr_cd', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['rs_cd','dr_cd'], 'trx_rs_dokter_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_rs_dokter');
	}

}
