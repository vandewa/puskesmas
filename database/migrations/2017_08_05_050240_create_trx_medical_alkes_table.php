<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalAlkesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_alkes', function(Blueprint $table)
		{
			$table->bigInteger('medical_alkes_seqno', true);
			$table->string('medical_cd', 20);
			$table->string('pos_cd', 20)->nullable();
			$table->string('item_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('paramedis_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
			$table->text('note')->nullable();
			$table->string('payment_st', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->decimal('amount', 10, 0)->nullable();
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
		Schema::drop('trx_medical_alkes');
	}

}
