<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepRacikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_racik', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('resep_seqno');
			$table->string('item_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('trx_satuan', 20)->nullable();
			$table->decimal('trx_quantity', 10)->nullable();
			$table->string('trans_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_resep_racik');
	}

}
