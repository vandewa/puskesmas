<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPoReturDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('po_retur_detail', function(Blueprint $table)
		{
			// $table->foreign('ri_cd', 'fkpo_retur_d176409')->references('ri_cd')->on('po_receive_detail')->onUpdate('CASCADE')->onDelete('CASCADE');
			// $table->foreign('retur_cd', 'fkpo_retur_d51622')->references('retur_cd')->on('po_retur')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('po_retur_detail', function(Blueprint $table)
		{
			// $table->dropForeign('fkpo_retur_d176409');
			// $table->dropForeign('fkpo_retur_d51622');
		});
	}

}
