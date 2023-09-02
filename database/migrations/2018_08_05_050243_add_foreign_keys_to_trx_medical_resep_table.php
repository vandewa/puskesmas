<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalResepTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical_resep', function(Blueprint $table)
		{
			// $table->foreign('medical_cd', 'fk__trx_medic__medic__5ffe1bf0')->references('medical_cd')->on('trx_medical')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical_resep', function(Blueprint $table)
		{
			// $table->dropForeign('fk__trx_medic__medic__5ffe1bf0');
		});
	}

}
