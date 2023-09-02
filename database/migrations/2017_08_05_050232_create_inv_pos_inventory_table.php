<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvPosInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_pos_inventory', function(Blueprint $table)
		{
			$table->string('pos_cd', 20)->primary('inv_pos_inventory_pkey');
			$table->string('pos_nm', 100)->nullable();
			$table->string('pos_root', 20)->nullable();
			$table->string('description', 1000)->nullable();
			$table->string('unit_medis', 20)->nullable();
			$table->char('postrx_st', 1)->nullable();
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
		Schema::drop('inv_pos_inventory');
	}

}
