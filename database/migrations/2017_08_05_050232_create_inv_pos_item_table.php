<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPosItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_pos_item', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pos_cd', 20);
			$table->string('item_cd', 20);
			$table->decimal('quantity', 10)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
//			$table->primary(['pos_cd','item_cd'], 'inv_pos_item_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_pos_item');
	}

}
