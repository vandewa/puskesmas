<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPoPrDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('po_pr_detail', function(Blueprint $table)
		{
			$table->foreign('pr_cd', 'fkpo_pr_deta758772')->references('pr_cd')->on('po_purchase_request')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('po_pr_detail', function(Blueprint $table)
		{
			$table->dropForeign('fkpo_pr_deta758772');
		});
	}

}
