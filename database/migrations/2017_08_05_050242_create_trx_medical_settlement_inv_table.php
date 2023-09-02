<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalSettlementInvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_settlement_inv', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd', 20)->nullable();
			$table->string('item_cd', 20)->nullable();
			$table->string('racik_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('item_price', 15, 0)->nullable();
			$table->decimal('item_price_master', 15, 0)->nullable();
			$table->decimal('total_price', 15, 0)->nullable();
			$table->string('account_cd', 20)->nullable();
			$table->bigInteger('ref_medical_resep_seqno')->nullable();
			$table->bigInteger('ref_medical_alkes_seqno')->nullable();
			$table->bigInteger('ref_resep_seqno')->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->char('payitem_st', 1)->nullable();
			$table->char('manual_st', 1)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('invoice_no', 25)->nullable();
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
		Schema::drop('trx_medical_settlement_inv');
	}

}
