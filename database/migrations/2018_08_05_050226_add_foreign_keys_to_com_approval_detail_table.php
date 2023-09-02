<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComApprovalDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_approval_detail', function(Blueprint $table)
		{
			$table->foreign('approval_cd', 'fkcom_approv992809')->references('approval_cd')->on('com_approval')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_approval_detail', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_approv992809');
		});
	}

}
