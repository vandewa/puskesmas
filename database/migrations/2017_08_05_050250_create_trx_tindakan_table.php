<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tindakan', function(Blueprint $table)
		{
			$table->string('treatment_cd', 20)->primary('trx_tindakan_pkey');
			$table->string('treatment_root', 20)->nullable();
			$table->string('treatment_nm', 1000)->nullable();
			$table->string('treatment_tp', 20)->nullable();
			$table->string('standar_tp', 20)->nullable();
			$table->string('file_format', 100)->nullable();
			$table->text('note')->nullable();
			$table->string('default_cd', 20)->nullable();
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
		Schema::drop('trx_tindakan');
	}

}
