<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvUnitMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_unit_map', function(Blueprint $table)
		{
			$table->string('unit_cd', 20);
			$table->string('unit_conversion', 20);
			$table->decimal('map_value', 10)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['unit_cd','unit_conversion'], 'inv_unit_map_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_unit_map');
	}

}
