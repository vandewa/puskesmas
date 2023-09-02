<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTarifTpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tarif_tp', function(Blueprint $table)
		{
			$table->bigInteger('tariftp_no', true);
			$table->string('tariftp_nm', 1000)->nullable();
			$table->decimal('tarif_total', 15, 0)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->bigInteger('trx_tarif_seqno')->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
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
		Schema::drop('trx_tarif_tp');
	}

}
