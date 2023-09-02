<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComLoginHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_login_history', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk__com_login__user___4361dd42')->references('user_id')->on('com_user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_login_history', function(Blueprint $table)
		{
			$table->dropForeign('fk__com_login__user___4361dd42');
		});
	}

}
