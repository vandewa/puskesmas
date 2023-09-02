<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxPasienFamilyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_pasien_family', function(Blueprint $table)
		{
			$table->foreign('pasien_cd', 'fk__trx_pasie__pasie__689361f1')->references('pasien_cd')->on('trx_pasien')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_pasien_family', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_pasie__pasie__689361f1');
		});
	}

}
