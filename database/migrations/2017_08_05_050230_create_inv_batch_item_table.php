<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvBatchItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_batch_item', function(Blueprint $table)
		{
			$table->bigInteger('batch_no');
			$table->string('item_cd', 20);
			$table->decimal('trx_qty', 10)->nullable();
			$table->string('batch_no_start', 20)->nullable();
			$table->string('batch_no_end', 20)->nullable();
			$table->time('expire_date')->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['batch_no','item_cd'], 'inv_batch_item_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_batch_item');
	}

}
