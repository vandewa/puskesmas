<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPaketTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_paket', function(Blueprint $table)
		{
			$table->string('paket_cd', 20)->primary('trx_paket_pkey');
			$table->string('paket_nm', 100)->nullable();
			$table->string('medical_tp', 20)->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->decimal('total_price', 15, 0)->nullable();
			$table->integer('total_day')->nullable();
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
		Schema::drop('trx_paket');
	}

}
