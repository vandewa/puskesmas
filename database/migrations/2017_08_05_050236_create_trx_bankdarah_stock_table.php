<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxBankdarahStockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_bankdarah_stock', function(Blueprint $table)
		{
			$table->bigInteger('stock_seq_no', true);
			$table->bigInteger('source_cd');
			$table->string('kantong_cd', 20)->nullable();
			$table->string('golongan_darah', 20)->nullable();
			$table->string('tekanan_darah', 20)->nullable();
			$table->string('hb', 20)->nullable();
			$table->string('wb_tp', 20)->nullable();
			$table->string('we_tp', 20)->nullable();
			$table->string('prc_tp', 20)->nullable();
			$table->string('lp_tp', 20)->nullable();
			$table->string('tc_tp', 20)->nullable();
			$table->string('prp_tp', 20)->nullable();
			$table->integer('berat_donor')->nullable();
			$table->integer('jumlah_donor')->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->dateTime('datetime_expired')->nullable();
			$table->char('status_pemakaian')->nullable();
			$table->text('note')->nullable();
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
		Schema::drop('trx_bankdarah_stock');
	}

}
