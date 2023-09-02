<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHisPlyUnitmedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('his_ply_unitmedis', function(Blueprint $table)
		{
			$table->string('medunit_cd', 20);
			$table->string('medunit_nm', 100)->nullable();
			$table->string('medicalunit_tp', 20)->nullable();
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
		Schema::drop('his_ply_unitmedis');
	}

}
