<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxKelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_kelas', function(Blueprint $table)
		{
			$table->string('kelas_cd', 20)->primary('trx_kelas_pkey');
			$table->string('kelas_nm', 100)->nullable();
			$table->string('data_mapcd', 100)->nullable();
			$table->string('kelas_cd_bpjs', 100)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->integer('kelas_urut')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_kelas');
	}

}
