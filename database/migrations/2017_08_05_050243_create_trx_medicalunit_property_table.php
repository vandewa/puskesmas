<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxMedicalunitPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_medicalunit_property', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->bigInteger('medical_unit_seqno');
			$table->integer('property_no')->nullable();
			$table->string('property_value', 100)->nullable();
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
		Schema::drop('trx_medicalunit_property');
	}

}
