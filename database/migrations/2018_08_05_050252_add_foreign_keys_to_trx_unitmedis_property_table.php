<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxUnitmedisPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_unitmedis_property', function(Blueprint $table)
		{
			$table->foreign('medicalunit_cd', 'fktrx_unitme74704')->references('medicalunit_cd')->on('trx_unitmedis_item')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_unitmedis_property', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_unitme74704');
		});
	}

}
