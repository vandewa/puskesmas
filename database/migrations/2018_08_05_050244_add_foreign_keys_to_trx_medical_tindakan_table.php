<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical_tindakan', function(Blueprint $table)
		{
			$table->foreign('medical_cd', 'fk__trx_medic__medic__61e66462')->references('medical_cd')->on('trx_medical')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('treatment_cd', 'fk__trx_medic__treat__62da889b')->references('treatment_cd')->on('trx_tindakan')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical_tindakan', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_medic__medic__61e66462');
			$table->dropForeign('fk__trx_medic__treat__62da889b');
		});
	}

}
