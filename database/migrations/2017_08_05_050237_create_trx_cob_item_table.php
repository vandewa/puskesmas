<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCobItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_cob_item', function(Blueprint $table)
		{
			$table->bigInteger('cob_item_seqno', true);
			$table->bigInteger('cob_seqno');
			$table->string('medical_cd');
			$table->bigInteger('medical_settlement_seqno');
			$table->string('data_nm')->nullable();
			$table->decimal('quantity', 10, 0)->nullable();
			$table->decimal('amount', 10, 0)->nullable();
			$table->string('item_tp')->nullable();
			$table->string('modi_id')->nullable();
			$table->timestamps();
			$table->string('insurance_cd', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_cob_item');
	}

}
