<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxUnitmedisItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_unitmedis_item', function(Blueprint $table)
		{
			$table->string('medicalunit_cd', 20)->primary('trx_unitmedis_item_pkey');
			$table->string('medunit_cd', 20);
			$table->string('medicalunit_root', 20)->nullable();
			$table->string('medicalunit_nm', 100)->nullable();
			$table->char('root_st', 1)->nullable();
			$table->string('file_format', 100)->nullable();
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
		Schema::drop('trx_unitmedis_item');
	}

}
