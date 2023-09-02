<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTarifTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tarif_tindakan', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('insurance_cd', 20)->nullable();
			$table->string('kelas_cd', 20)->nullable();
			$table->string('treatment_cd', 20)->nullable();
			$table->decimal('tarif', 15, 0)->nullable();
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
		Schema::drop('trx_tarif_tindakan');
	}

}
