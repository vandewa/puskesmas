<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvItemMasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_item_master', function(Blueprint $table)
		{
			$table->foreign('type_cd', 'fkinv_item_m536101')->references('type_cd')->on('inv_item_type')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('unit_cd', 'fkinv_item_m785793')->references('unit_cd')->on('inv_unit')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_item_master', function(Blueprint $table)
		{
			$table->dropForeign('fkinv_item_m536101');
			$table->dropForeign('fkinv_item_m785793');
		});
	}

}
