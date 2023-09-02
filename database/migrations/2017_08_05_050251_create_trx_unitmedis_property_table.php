<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxUnitmedisPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_unitmedis_property', function(Blueprint $table)
		{
			$table->string('medicalunit_cd', 20);
			$table->integer('property_no');
			$table->integer('root_no')->nullable();
			$table->string('property_nm', 100)->nullable();
			$table->string('referensi_value', 100)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['medicalunit_cd','property_no'], 'trx_unitmedis_property_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_unitmedis_property');
	}

}
