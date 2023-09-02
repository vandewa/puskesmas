<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxBangsalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_bangsal', function(Blueprint $table)
		{
			$table->string('bangsal_cd', 20)->primary('trx_bangsal_pkey');
			$table->string('bangsal_nm', 100)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->integer('bangsal_urut')->nullable();
			$table->string('bangsal_group', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_bangsal');
	}

}
