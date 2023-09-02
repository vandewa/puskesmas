<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxKamarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_kamar', function(Blueprint $table)
		{
			$table->string('kamar_cd', 20)->primary()->nullable();
			$table->string('kamar_nm', 100)->nullable();
			$table->string('ruang_st', 20)->nullable();
			$table->string('modi_id', 100)->nullable();
			$table->string('bangsal_cd', 20)->nullable();
			$table->string('kelas_cd', 100)->nullable();
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
		Schema::drop('trx_kamar');
	}

}
