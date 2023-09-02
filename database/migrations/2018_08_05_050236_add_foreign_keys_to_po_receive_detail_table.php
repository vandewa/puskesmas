<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPoReceiveDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('po_receive_detail', function(Blueprint $table)
		{
			// $table->foreign('ri_cd')->references('ri_cd')->on('po_receive_item')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('po_receive_detail', function(Blueprint $table)
		{
			//$table->dropForeign('fkpo_receive716706');
		});
	}

}
