<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComCodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_code', function(Blueprint $table)
		{
			$table->string('com_cd', 20)->primary('com_code_pkey');
			$table->string('code_nm', 100)->nullable();
			$table->string('code_group', 20)->nullable();
			$table->string('code_value', 100)->nullable();
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
		Schema::drop('com_code');
	}

}
