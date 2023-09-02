<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxClinicalPathTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_clinical_path', function(Blueprint $table)
		{
			$table->string('cp_cd', 20)->primary('trx_clinical_path_pkey');
			$table->string('cp_nm', 100)->nullable();
			$table->string('icd_cd', 20)->nullable();
			$table->integer('los')->nullable();
			$table->string('cp_tp_cd', 20)->nullable();
			$table->string('modi_id', 20);
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
		Schema::drop('trx_clinical_path');
	}

}
