<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComRoleUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_role_user', function(Blueprint $table)
		{
			$table->string('role_cd', 20);
			$table->string('user_id', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['role_cd','user_id'], 'com_role_user_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_role_user');
	}

}
