<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoPoDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_po_detail', function(Blueprint $table)
		{
			$table->string('po_cd', 10);
			$table->string('item_cd', 20);
			$table->string('pr_cd', 10)->nullable();
			$table->string('unit_cd', 10)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('unit_price', 10, 0)->nullable();
			$table->decimal('trx_amount', 10, 0)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['po_cd','item_cd'], 'po_po_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('po_po_detail');
	}

}
