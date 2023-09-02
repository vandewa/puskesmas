<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxIcdgroupItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_icdgroup_item', function(Blueprint $table)
		{
			$table->foreign('group_cd', 'fk__trx_icdgr__group__585cfa28')->references('group_cd')->on('trx_icd_group')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_icdgroup_item', function(Blueprint $table)
		{
			$table->dropForeign('fk__trx_icdgr__group__585cfa28');
		});
	}

}
