<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPoPoDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('po_po_detail', function(Blueprint $table)
		{
			$table->foreign('po_cd', 'fkpo_po_deta445681')->references('po_cd')->on('po_purchase_order')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('po_po_detail', function(Blueprint $table)
		{
			$table->dropForeign('fkpo_po_deta445681');
		});
	}

}
