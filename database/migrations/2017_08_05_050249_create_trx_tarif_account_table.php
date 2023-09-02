<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxTarifAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_tarif_account', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('tarif_tp', 20)->nullable();
			$table->string('account_cd', 20)->nullable();
			$table->string('table_nm', 100)->nullable();
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
		Schema::drop('trx_tarif_account');
	}

}
