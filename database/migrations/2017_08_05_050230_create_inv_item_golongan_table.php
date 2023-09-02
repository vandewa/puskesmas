<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemGolonganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_golongan', function(Blueprint $table)
		{
			$table->string('golongan_cd', 20)->nullable();
			$table->string('golongan_nm', 100)->nullable();
			$table->string('root_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('level_no', 100)->nullable();
			$table->string('type_cd', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_item_golongan');
	}

}
