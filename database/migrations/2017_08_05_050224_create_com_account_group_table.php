<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComAccountGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_account_group', function(Blueprint $table)
		{
			$table->string('accgroup_cd', 20)->primary('com_account_group_pkey');
			$table->string('accgroup_nm', 100)->nullable();
			$table->integer('order_no')->nullable();
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
		Schema::drop('com_account_group');
	}

}
