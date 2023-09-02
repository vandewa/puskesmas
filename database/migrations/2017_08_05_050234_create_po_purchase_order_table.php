<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoPurchaseOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_purchase_order', function(Blueprint $table)
		{
			$table->string('po_cd', 10)->primary('po_purchase_order_pkey');
			$table->string('po_no', 10)->nullable();
			$table->string('supplier_cd', 20)->nullable();
			$table->string('invoice_no', 20)->nullable();
			$table->integer('trx_year')->nullable();
			$table->decimal('trx_month', 2, 0)->nullable();
			$table->dateTime('trx_date')->nullable();
			$table->string('top_cd', 20)->nullable();
			$table->string('currency_cd', 20)->nullable();
			$table->decimal('rate', 15, 0)->nullable();
			$table->decimal('total_price', 15, 0)->nullable();
			$table->decimal('total_amount', 15, 0)->nullable();
			$table->string('vat_tp', 20)->nullable();
			$table->decimal('percent_ppn', 5)->nullable();
			$table->decimal('ppn', 10, 0)->nullable();
			$table->string('delivery_address', 1000)->nullable();
			$table->dateTime('delivery_datetime')->nullable();
			$table->string('entry_by', 100)->nullable();
			$table->dateTime('entry_date')->nullable();
			$table->string('note', 1000)->nullable();
			$table->char('po_st', 1)->nullable();
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
		Schema::drop('po_purchase_order');
	}

}
