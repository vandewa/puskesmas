<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalRecordTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical_record', function(Blueprint $table)
		{
			$table->foreign('medical_cd', 'fk__trx_medic__medic__5e15d37e')->references('medical_cd')->on('trx_medical')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('pasien_cd', 'fk__trx_medic__pasie__5f09f7b7')->references('pasien_cd')->on('trx_pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical_record', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_medic__medic__5e15d37e');
			$table->dropForeign('fk__trx_medic__pasie__5f09f7b7');
		});
	}

}
