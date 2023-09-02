<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoReturDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_retur_detail', function(Blueprint $table)
		{
			$table->string('retur_cd', 10);
			$table->string('ri_cd', 10);
			$table->string('item_cd', 20);
			$table->string('unit_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('unit_price', 10, 0)->nullable();
			$table->decimal('trx_amount', 10, 0)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['retur_cd','ri_cd','item_cd'], 'po_retur_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('po_retur_detail');
	}

}
