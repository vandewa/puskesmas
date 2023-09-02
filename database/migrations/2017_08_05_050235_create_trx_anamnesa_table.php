<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxAnamnesaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_anamnesa', function(Blueprint $table)
		{
			$table->string('anamnesa_cd', 20)->primary('trx_anamnesa_pkey');
			$table->string('anamnesa_root', 20)->nullable();
			$table->string('anamnesa_nm', 1000)->nullable();
			$table->text('note')->nullable();
			$table->string('modi_id', 20);
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
		Schema::drop('trx_anamnesa');
	}

}
