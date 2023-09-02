<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_role_user', function(Blueprint $table)
		{
			$table->foreign('role_cd', 'fkcom_role_u949522')->references('role_cd')->on('com_role')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'fkcom_role_u977424')->references('user_id')->on('com_user')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_role_user', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_role_u949522');
			$table->dropForeign('fkcom_role_u977424');
		});
	}

}
