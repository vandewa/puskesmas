<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComUserRsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_user_rs', function(Blueprint $table)
		{
			$table->string('user_id', 20);
			$table->string('rs_cd', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['user_id','rs_cd'], 'com_user_rs_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_user_rs');
	}

}
