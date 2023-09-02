<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxDokterSpesialisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_dokter_spesialis', function(Blueprint $table)
		{
			$table->foreign('spesialis_cd', 'fktrx_dokter570')->references('spesialis_cd')->on('trx_spesialis')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('dr_cd', 'fktrx_dokter700025')->references('dr_cd')->on('trx_dokter')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_dokter_spesialis', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_dokter570');
			$table->dropForeign('fktrx_dokter700025');
		});
	}

}
