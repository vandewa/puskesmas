<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComLoginHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_login_history', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('user_id', 20);
			$table->dateTime('datetime_login')->nullable();
			$table->dateTime('datetime_logout')->nullable();
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
		Schema::drop('com_login_history');
	}

}
