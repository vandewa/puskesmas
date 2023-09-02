<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoReceiveDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_receive_detail', function(Blueprint $table)
		{
			$table->string('ri_cd', 10);
			$table->string('item_cd', 20);
			$table->string('po_cd', 10)->nullable();
			$table->string('principal_cd', 20)->nullable();
			$table->string('unit_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('unit_price', 10, 0)->nullable();
			$table->decimal('discount_percent', 5)->nullable();
			$table->decimal('discount_amount', 15, 0)->nullable();
			$table->decimal('trx_amount', 10, 0)->nullable();
			$table->string('currency_cd', 20)->nullable();
			$table->decimal('rate', 15, 0)->nullable();
			$table->string('faktur_no', 50)->nullable();
			$table->date('faktur_date')->nullable();
			$table->string('batch_no', 50)->nullable();
			$table->date('expire_date')->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['ri_cd','item_cd'], 'po_receive_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('po_receive_detail');
	}

}
