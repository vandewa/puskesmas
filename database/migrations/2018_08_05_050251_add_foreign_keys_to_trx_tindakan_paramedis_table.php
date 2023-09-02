<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxTindakanParamedisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_tindakan_paramedis', function(Blueprint $table)
		{
			$table->foreign('treatment_cd', 'fk__trx_tinda__treat__74f938d6')->references('treatment_cd')->on('trx_tindakan')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_tindakan_paramedis', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_tinda__treat__74f938d6');
		});
	}

}
