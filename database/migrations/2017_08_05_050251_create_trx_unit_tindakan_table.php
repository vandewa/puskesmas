<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxUnitTindakanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_unit_tindakan', function(Blueprint $table)
		{
			$table->string('medunit_cd', 20);
			$table->string('treatment_cd', 20);
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['medunit_cd','treatment_cd'], 'trx_unit_tindakan_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_unit_tindakan');
	}

}
