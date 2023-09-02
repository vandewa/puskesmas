<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxSettlementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_settlement', function(Blueprint $table)
		{
			$table->bigInteger('settlement_no', true);
			$table->string('medical_cd', 20)->nullable();
			$table->bigInteger('ref_medical_resep_seqno')->nullable();
			$table->string('pasien_cd', 20)->nullable();
			$table->string('invoice_no', 25)->nullable();
			$table->dateTime('invoice_date')->nullable();
			$table->string('payment_tp', 20)->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->string('payment_cd', 20)->nullable();
			$table->string('card_no', 50)->nullable();
			$table->string('entry_nm', 100)->nullable();
			$table->dateTime('entry_date')->nullable();
			$table->string('pay_nm', 100)->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('note', 1000)->nullable();
			$table->decimal('amount_asuransi', 15, 0)->nullable();
			$table->decimal('amount_pasien', 15, 0)->nullable();
			$table->decimal('amount_tunai', 15, 0)->nullable();
			$table->decimal('amount_nontunai', 15, 0)->nullable();
			$table->decimal('discount_percent', 5)->nullable();
			$table->decimal('discount_amount', 15, 0)->nullable();
			$table->string('info_01', 1000)->nullable();
			$table->string('info_02', 1000)->nullable();
			$table->decimal('info_11', 15, 0)->nullable();
			$table->decimal('info_12', 15, 0)->nullable();
			$table->decimal('ext_amount', 15, 0)->nullable();
			$table->dateTime('ext_date')->nullable();
			$table->string('ext_user', 20)->nullable();
			$table->char('ext_st', 1)->nullable();
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
		Schema::drop('trx_settlement');
	}

}
