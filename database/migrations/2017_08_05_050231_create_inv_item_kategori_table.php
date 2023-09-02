<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemKategoriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_kategori', function(Blueprint $table)
		{
			$table->string('kategori_cd', 20)->nullable();
			$table->string('kategori_nm', 100)->nullable();
			$table->string('root_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
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
		Schema::drop('inv_item_kategori');
	}

}
