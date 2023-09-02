<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoreUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->uuid('uuid');
			$table->integer('company_id')->nullable();
			$table->integer('group_id')->nullable();
			$table->string('username')->unique();
			$table->string('fullname');
			$table->string('email')->nullable();
			$table->string('password', 125);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->index(['username','email','remember_token']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('core_users');
	}

}
