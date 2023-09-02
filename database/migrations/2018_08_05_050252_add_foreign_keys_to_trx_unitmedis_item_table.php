<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxUnitmedisItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_unitmedis_item', function(Blueprint $table)
		{
			$table->foreign('medunit_cd', 'fktrx_unitme721950')->references('medunit_cd')->on('trx_unit_medis')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_unitmedis_item', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_unitme721950');
		});
	}

}
