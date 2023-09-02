<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComRegionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_region', function(Blueprint $table)
		{
			$table->string('region_cd', 20)->primary('com_region_pkey');
			$table->string('region_nm', 100)->nullable();
			$table->string('region_root', 20)->nullable();
			$table->string('region_capital', 1000)->nullable();
			$table->integer('region_level')->nullable();
			$table->char('default_st', 1)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('postal_cd', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_region');
	}

}
