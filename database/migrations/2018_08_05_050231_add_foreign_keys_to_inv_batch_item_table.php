<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvBatchItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('inv_batch_item', function(Blueprint $table)
		{
			$table->foreign('batch_no', 'fk__inv_batch__batch__491ab698')->references('move_seqno')->on('inv_item_move')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('inv_batch_item', function(Blueprint $table)
		{
			$table->dropForeign('fk__inv_batch__batch__491ab698');
		});
	}

}
