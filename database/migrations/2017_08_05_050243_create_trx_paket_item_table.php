<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPaketItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_paket_item', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('paket_cd', 20);
			$table->string('item_nm', 1000)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->integer('trx_tarif_seqno')->nullable();
			$table->decimal('tarif_paket', 15, 0)->nullable();
			$table->decimal('tarif_trx', 15, 0)->nullable();
			$table->decimal('quantity', 10)->nullable();
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
		Schema::drop('trx_paket_item');
	}

}
