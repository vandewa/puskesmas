<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxBirthTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_birth', function(Blueprint $table)
		{
			$table->integer('seq_no', true);
			$table->string('parent_cd', 20);
			$table->string('child_cd', 20);
			$table->dateTime('birth_date');
			$table->integer('birth_weight');
			$table->integer('birth_height');
			$table->string('medical_cd', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_birth');
	}

}
