<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComRoleMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_role_menu', function(Blueprint $table)
		{
			$table->string('role_cd', 20);
			$table->string('menu_cd', 20);
			$table->string('rule_tp', 4)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['role_cd','menu_cd'], 'com_role_menu_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_role_menu');
	}

}
