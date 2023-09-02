<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTarifGeneralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tarif_general', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('tarif_nm', 100)->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->decimal('tarif', 15, 0)->nullable();
			$table->char('auto_add', 1)->nullable();
			$table->string('medical_tp', 20)->nullable();
			$table->string('account_cd', 20)->nullable();
			$table->string('rstp_cd', 20)->nullable();
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
		Schema::drop('trx_tarif_general');
	}

}
