<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxBankdarahSourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_bankdarah_source', function(Blueprint $table)
		{
			$table->bigInteger('source_cd', true);
			$table->string('bankdarah_source_nm', 100);
			$table->string('bankdarah_source_tp', 20);
			$table->dateTime('register_date')->nullable();
			$table->date('birth_date')->nullable();
			$table->string('birth_place', 20)->nullable();
			$table->text('address')->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('region_prop', 20)->nullable();
			$table->string('region_kab', 20)->nullable();
			$table->string('region_kec', 20)->nullable();
			$table->string('region_kel', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile1', 20)->nullable();
			$table->string('mobile2', 20)->nullable();
			$table->string('blood_tp', 20)->nullable();
			$table->string('identity_no', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_bankdarah_source');
	}

}
