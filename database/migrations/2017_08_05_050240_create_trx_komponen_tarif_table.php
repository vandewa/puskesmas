<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxKomponenTarifTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_komponen_tarif', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('trx_tarif_seqno');
			$table->string('tarif_tp', 20)->nullable();
			$table->string('paramedis_tp', 20)->nullable();
			$table->decimal('komponen_institusi', 15, 0)->nullable();
			$table->decimal('komponen_paramedis', 15, 0)->nullable();
			$table->decimal('komponen_instrumen', 15, 0)->nullable();
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
		Schema::drop('trx_komponen_tarif');
	}

}
