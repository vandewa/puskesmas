<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical_unit', function(Blueprint $table)
		{
			$table->foreign('medicalunit_cd', 'fk__trx_medic__medic__63ceacd4')->references('medicalunit_cd')->on('trx_unitmedis_item')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('medical_cd', 'fk__trx_medic__medic__64c2d10d')->references('medical_cd')->on('trx_medical')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical_unit', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_medic__medic__63ceacd4');
			$table->dropForeign('fk__trx_medic__medic__64c2d10d');
		});
	}

}
