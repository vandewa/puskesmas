<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPasienTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_pasien', function(Blueprint $table)
		{
			$table->string('pasien_cd', 40)->primary('trx_pasien_pkey');
			$table->string('rs_cd', 20)->nullable();
			$table->string('no_rm', 20)->nullable();
			$table->dateTime('register_date')->nullable();
			$table->string('pasien_tp', 20)->nullable();
			$table->string('pasien_nm', 100)->nullable();
			$table->string('middle_nm', 100)->nullable();
			$table->string('last_nm', 100)->nullable();
			$table->string('title', 50)->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('region_prop', 100)->nullable();
			$table->string('region_kab', 100)->nullable();
			$table->string('region_kec', 100)->nullable();
			$table->string('region_kel', 100)->nullable();
			$table->string('rw', 10)->nullable();
			$table->string('rt', 10)->nullable();
			$table->string('postcode', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile1', 20)->nullable();
			$table->string('mobile2', 20)->nullable();
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
			$table->char('register_st', 1)->nullable();
			$table->string('mom_name', 50)->nullable();
			$table->string('dad_name', 50)->nullable();
			$table->string('identity_tp', 50)->nullable();
			$table->string('identity_no', 50)->nullable();
			$table->string('pj_name', 100)->nullable();
			$table->string('pj_tp', 50)->nullable();
			$table->string('pj_address', 50)->nullable();
			$table->date('pj_date_birth', 50)->nullable();
			$table->string('pj_telp', 50)->nullable();
			$table->char('datamedis_01', 1)->nullable();
			$table->string('datamedis_02', 100)->nullable();
			$table->time('datetime_pas_process')->nullable();
			$table->string('old_no_rm', 20)->nullable();
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
		Schema::drop('trx_pasien');
	}

}
