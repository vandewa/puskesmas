<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxInsuranceCoverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_insurance_cover', function(Blueprint $table)
		{
			$table->foreign('insurance_cd', 'fk__trx_insur__insur__59511e61')->references('insurance_cd')->on('trx_insurance')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_insurance_cover', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_insur__insur__59511e61');
		});
	}

}
