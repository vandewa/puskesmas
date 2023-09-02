<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalAlkesHsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medical_alkes_hs', function(Blueprint $table)
		{
			$table->bigInteger('medical_alkes_seqno')->primary('trx_medical_alkes_hs_pkey');
			$table->string('medical_cd', 20);
			$table->string('pos_cd', 20)->nullable();
			$table->string('item_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->string('dr_cd', 20)->nullable();
			$table->string('paramedis_cd', 20)->nullable();
			$table->dateTime('datetime_trx')->nullable();
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
		Schema::drop('trx_medical_alkes_hs');
	}

}
