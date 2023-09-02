<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCobTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_cob', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd')->nullable();
			$table->string('insurance_cd')->nullable();
			$table->decimal('amount_persen', 10, 0)->nullable();
			$table->decimal('amount_angka', 10, 0)->nullable();
			$table->string('modi_id')->nullable();
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
		Schema::drop('trx_cob');
	}

}
