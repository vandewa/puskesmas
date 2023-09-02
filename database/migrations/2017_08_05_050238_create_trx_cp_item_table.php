<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCpItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_cp_item', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('cp_cd', 20);
			$table->integer('day_no')->nullable();
			$table->string('data_cd', 20)->nullable();
			$table->string('data_nm', 1000)->nullable();
			$table->string('tarif_tp', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('tab_act')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_cp_item');
	}

}
