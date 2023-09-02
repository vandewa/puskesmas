<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_user', function(Blueprint $table)
		{
			$table->string('user_id', 20)->primary('com_user_pkey');
			$table->string('user_nm', 100)->nullable();
			$table->string('password', 100)->nullable();
			$table->char('login_st', 1)->nullable();
			$table->char('lock_st', 1)->nullable();
			$table->dateTime('last_login')->nullable();
			$table->char('change_password', 1)->nullable();
			$table->dateTime('password_date')->nullable();
			$table->string('rule_tp', 4)->nullable();
			$table->string('default_medunit', 20)->nullable();
			$table->string('default_bangsal', 20)->nullable();
			$table->string('rs_cd', 20)->nullable();
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
		Schema::drop('com_user');
	}

}
