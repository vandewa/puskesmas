<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxUnitTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_unit_tindakan', function(Blueprint $table)
		{
			$table->foreign('treatment_cd', 'fktrx_unit_t683144')->references('treatment_cd')->on('trx_tindakan')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('medunit_cd', 'fktrx_unit_t864328')->references('medunit_cd')->on('trx_unit_medis')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_unit_tindakan', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_unit_t683144');
			$table->dropForeign('fktrx_unit_t864328');
		});
	}

}
