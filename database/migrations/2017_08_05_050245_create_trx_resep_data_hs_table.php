<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepDataHsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_data_hs', function(Blueprint $table)
		{
			$table->bigInteger('resep_seqno', true);
			$table->bigInteger('medical_resep_seqno');
			$table->string('item_cd', 20)->nullable();
			$table->string('data_nm', 1000)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->decimal('price', 15, 0)->nullable();
			$table->string('resep_tp', 20)->nullable();
			$table->string('info_01', 100)->nullable();
			$table->string('info_02', 100)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('satuan_paket', 100)->nullable();
			$table->date('expired_date')->nullable();
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
		Schema::drop('trx_resep_data_hs');
	}

}
