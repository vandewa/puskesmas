<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxRuangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_ruang', function(Blueprint $table)
		{
			$table->string('ruang_cd', 20)->primary('trx_ruang_pkey');
			$table->string('kelas_cd', 20);
			$table->string('bangsal_cd', 20)->nullable();
			$table->string('ruang_nm', 100)->nullable();
			$table->bigInteger('ruang_st')->nullable()->default(0);
			$table->string('ruang_tp', 20)->nullable();
			$table->string('kelas_default', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('kamar_cd', 20)->nullable();
			$table->string('kondisi_st', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_ruang');
	}

}
