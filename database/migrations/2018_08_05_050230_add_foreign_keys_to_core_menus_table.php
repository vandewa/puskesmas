<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoreMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('core_menus', function(Blueprint $table)
		{
			$table->foreign('module_id')->references('id')->on('core_modules')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('core_menus', function(Blueprint $table)
		{
			$table->dropForeign('core_menus_module_id_foreign');
		});
	}

}
