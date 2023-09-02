<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxIcdAnamnesaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_icd_anamnesa', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('icd_cd', 20)->nullable();
			$table->string('anamnesa_cd', 20)->nullable();
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
		Schema::drop('trx_icd_anamnesa');
	}

}
