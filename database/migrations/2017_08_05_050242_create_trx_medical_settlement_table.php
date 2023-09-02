<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalSettlementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_settlement', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd', 20)->nullable();
			$table->string('data_cd', 20)->nullable();
			$table->string('data_nm', 100)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->string('account_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('item_price', 15, 0)->nullable();
			$table->decimal('amount', 15, 0)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->char('payitem_st', 1)->nullable();
			$table->char('manual_st', 1)->nullable();
			$table->string('note', 1000)->nullable();
			$table->bigInteger('ref_seqno')->nullable();
			$table->string('invoice_no', 25)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->decimal('diskon_value', 10, 0)->nullable();
			$table->decimal('def_amount', 10, 0)->nullable();
			$table->decimal('diskon_angka', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_medical_settlement');
	}

}
