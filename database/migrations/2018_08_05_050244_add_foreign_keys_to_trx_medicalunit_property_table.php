<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalunitPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medicalunit_property', function(Blueprint $table)
		{
			$table->foreign('medical_unit_seqno', 'fk__trx_medic__medic__66ab197f')->references('medical_unit_seqno')->on('trx_medical_unit')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medicalunit_property', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_medic__medic__66ab197f');
		});
	}

}
