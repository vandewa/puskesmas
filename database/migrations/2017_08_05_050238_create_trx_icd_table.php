<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxIcdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_icd', function(Blueprint $table)
		{
			$table->string('icd_cd', 20)->primary('trx_icd_pkey');
			$table->string('icd_root', 20)->nullable();
			$table->string('icd_nm', 1000)->nullable();
			$table->string('icd_tp', 20)->nullable();
			$table->text('note')->nullable();
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
		Schema::drop('trx_icd');
	}

}
