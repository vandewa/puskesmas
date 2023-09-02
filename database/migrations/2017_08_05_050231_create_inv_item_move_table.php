<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemMoveTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_move', function(Blueprint $table)
		{
			$table->bigInteger('move_seqno', true);
			$table->string('pos_cd', 20)->nullable();
			$table->string('pos_destination', 20)->nullable();
			$table->string('item_cd', 20)->nullable();
			$table->string('trx_by', 100)->nullable();
			$table->dateTime('trx_datetime')->nullable();
			$table->decimal('trx_qty', 10)->nullable();
			$table->decimal('old_stock', 10)->nullable();
			$table->decimal('new_stock', 10)->nullable();
			$table->string('purpose', 1000)->nullable();
			$table->string('vendor', 100)->nullable();
			$table->string('move_tp', 20)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_item_move');
	}

}
