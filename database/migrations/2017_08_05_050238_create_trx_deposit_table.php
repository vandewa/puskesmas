<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxDepositTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_deposit', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('deposit_cd', 30)->nullable();
			$table->string('medical_cd', 20)->nullable();
			$table->string('pasien_cd', 20)->nullable();
			$table->string('invoice_no', 25)->nullable();
			$table->dateTime('invoice_date')->nullable();
			$table->string('payment_tp', 20)->nullable();
			$table->string('payment_cd', 20)->nullable();
			$table->string('card_no', 50)->nullable();
			$table->decimal('total', 15, 0)->nullable();
			$table->string('entry_nm', 100)->nullable();
			$table->dateTime('entry_date')->nullable();
			$table->dateTime('pay_date')->nullable();
			$table->string('pay_nm', 100)->nullable();
			$table->decimal('amount_tunai', 15, 0)->nullable();
			$table->decimal('amount_nontunai', 15, 0)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->char('kembali_st')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_deposit');
	}

}
