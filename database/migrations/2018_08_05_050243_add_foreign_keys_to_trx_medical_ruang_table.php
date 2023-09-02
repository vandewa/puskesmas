<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalRuangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical_ruang', function(Blueprint $table)
		{
			$table->foreign('medical_cd', 'fk__trx_medic__medic__60f24029')->references('medical_cd')->on('trx_medical')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical_ruang', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_medic__medic__60f24029');
		});
	}

}
