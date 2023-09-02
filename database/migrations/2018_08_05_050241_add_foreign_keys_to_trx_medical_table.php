<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxMedicalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_medical', function(Blueprint $table)
		{
			$table->foreign('pasien_cd', 'fktrx_medica240276')->references('pasien_cd')->on('trx_pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_medical', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_medica240276');
		});
	}

}
