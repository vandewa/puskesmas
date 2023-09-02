<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_menu', function(Blueprint $table)
		{
			$table->string('menu_cd', 20)->primary('com_menu_pkey');
			$table->string('menu_nm', 100)->nullable();
			$table->string('menu_root', 20)->nullable();
			$table->string('menu_url', 50)->nullable();
			$table->string('menu_no', 10)->nullable();
			$table->integer('menu_level')->nullable();
			$table->string('menu_image', 100)->nullable();
			$table->char('menu_tp', 1)->nullable();
			$table->string('menu_param', 20)->nullable();
			$table->char('active_st', 1)->nullable();
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
		Schema::drop('com_menu');
	}

}
