<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxSettlementShareTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_settlement_share', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('medical_cd', 20)->nullable();
			$table->decimal('amount_total', 15, 0)->nullable();
			$table->decimal('amount_asuransi', 15, 0)->nullable();
			$table->decimal('amount_pasien', 15, 0)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->bigInteger('ref_seqno')->nullable();
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
		Schema::drop('trx_settlement_share');
	}

}
