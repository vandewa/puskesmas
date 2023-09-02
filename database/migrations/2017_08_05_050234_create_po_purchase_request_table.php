<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoPurchaseRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_purchase_request', function(Blueprint $table)
		{
			$table->string('pr_cd', 10)->primary('po_purchase_request_pkey');
			$table->string('pr_no', 10)->nullable();
			$table->string('supplier_cd', 20)->nullable();
			$table->integer('trx_year')->nullable();
			$table->decimal('trx_month', 2, 0)->nullable();
			$table->dateTime('trx_date')->nullable();
			$table->string('entry_by', 100)->nullable();
			$table->dateTime('entry_date')->nullable();
			$table->string('note', 1000)->nullable();
			$table->char('pr_st', 1)->nullable();
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
		Schema::drop('po_purchase_request');
	}

}
