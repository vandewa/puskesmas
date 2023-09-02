<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxInsuranceMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_insurance_member', function(Blueprint $table)
		{
			$table->foreign('insurance_cd', 'fktrx_insura941570')->references('insurance_cd')->on('trx_insurance')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_insurance_member', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_insura941570');
		});
	}

}
