<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxDokterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_dokter', function(Blueprint $table)
		{
			$table->string('dr_cd', 20)->primary('trx_dokter_pkey');
			$table->string('dr_nm', 100)->nullable();
			$table->string('spesialis_cd', 20)->nullable();
			$table->char('paramedis_st', 1)->nullable();
			$table->string('nip', 20)->nullable();
			$table->string('dr_tp', 20)->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('region_prop', 100)->nullable();
			$table->string('region_kab', 100)->nullable();
			$table->string('region_kec', 100)->nullable();
			$table->string('region_kel', 100)->nullable();
			$table->string('postcode', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('fax', 20)->nullable();
			$table->string('email', 100)->nullable();
			$table->string('birth_place', 100)->nullable();
			$table->date('birth_date')->nullable();
			$table->integer('age')->nullable();
			$table->string('blood_tp', 20)->nullable();
			$table->decimal('weight', 5)->nullable();
			$table->decimal('height', 5)->nullable();
			$table->string('gender_tp', 20)->nullable();
			$table->string('marital_tp', 20)->nullable();
			$table->string('nation_cd', 20)->nullable();
			$table->string('religion_cd', 20)->nullable();
			$table->string('occupation_cd', 20)->nullable();
			$table->string('education_cd', 20)->nullable();
			$table->string('race_cd', 20)->nullable();
			$table->string('file_picture', 50)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('sep', 100)->nullable();
			$table->string('str', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_dokter');
	}

}
