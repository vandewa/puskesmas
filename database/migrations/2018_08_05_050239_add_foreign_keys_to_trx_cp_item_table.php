<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxCpItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_cp_item', function(Blueprint $table)
		{
			$table->foreign('cp_cd', 'fktrx_cp_ite964245')->references('cp_cd')->on('trx_clinical_path')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_cp_item', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_cp_ite964245');
		});
	}

}
