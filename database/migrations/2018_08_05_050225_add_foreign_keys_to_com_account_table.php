<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_account', function(Blueprint $table)
		{
			$table->foreign('accgroup_cd', 'fkcom_accoun342539')->references('accgroup_cd')->on('com_account_group')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_account', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_accoun342539');
		});
	}

}
