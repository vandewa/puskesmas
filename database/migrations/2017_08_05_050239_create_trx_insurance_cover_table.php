<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxInsuranceCoverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_insurance_cover', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('insurance_cd', 20);
			$table->string('tarif_tp', 20)->nullable();
			$table->char('cover_st', 1)->nullable();
			$table->decimal('cover_max', 15, 0)->nullable();
			$table->decimal('persen_asuransi', 5)->nullable();
			$table->decimal('persen_pasien', 5)->nullable();
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
		Schema::drop('trx_insurance_cover');
	}

}
