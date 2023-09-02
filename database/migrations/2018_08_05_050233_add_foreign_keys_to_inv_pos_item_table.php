<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvPosItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_pos_item', function(Blueprint $table)
		{
			$table->foreign('pos_cd', 'fkinv_pos_it500035')->references('pos_cd')->on('inv_pos_inventory')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_pos_item', function(Blueprint $table)
		{
			$table->dropForeign('fkinv_pos_it500035');
		});
	}

}
