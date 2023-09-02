<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxPasienInsuranceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_pasien_insurance', function(Blueprint $table)
		{
			$table->foreign('insurance_cd', 'fk__trx_pasie__insur__6b6fce9c')->references('insurance_cd')->on('trx_insurance')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('insurance_member_cd', 'fk__trx_pasie__insur__6c63f2d5')->references('insurance_member_cd')->on('trx_insurance_member')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('pasien_cd', 'fk__trx_pasie__pasie__6a7baa63')->references('pasien_cd')->on('trx_pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_pasien_insurance', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_pasie__insur__6b6fce9c');
			$table->dropForeign('fk__trx_pasie__insur__6c63f2d5');
			$table->dropForeign('fk__trx_pasie__pasie__6a7baa63');
		});
	}

}
