<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComRoleMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_role_menu', function(Blueprint $table)
		{
			$table->foreign('menu_cd', 'fkcom_role_m499159')->references('menu_cd')->on('com_menu')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('role_cd', 'fkcom_role_m698022')->references('role_cd')->on('com_role')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_role_menu', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_role_m499159');
			$table->dropForeign('fkcom_role_m698022');
		});
	}

}
