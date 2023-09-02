<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxRuangTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_ruang', function(Blueprint $table)
		{
			$table->foreign('kelas_cd', 'fktrx_ruang449607')->references('kelas_cd')->on('trx_kelas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_ruang', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_ruang449607');
		});
	}

}
