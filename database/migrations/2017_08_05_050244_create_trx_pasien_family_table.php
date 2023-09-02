<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPasienFamilyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_pasien_family', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('pasien_cd', 21);
			$table->string('family_tp', 20)->nullable();
			$table->string('family_nm', 100)->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile1', 20)->nullable();
			$table->string('mobile2', 20)->nullable();
			$table->string('birth_place', 100)->nullable();
			$table->date('birth_date')->nullable();
			$table->integer('age')->nullable();
			$table->string('blood_tp', 20)->nullable();
			$table->string('gender_tp', 20)->nullable();
			$table->string('region_prop', 100)->nullable();
			$table->string('region_kab', 100)->nullable();
			$table->string('region_kec', 100)->nullable();
			$table->string('region_kel', 100)->nullable();
			$table->string('identity_tp', 20)->nullable();
			$table->string('id_no', 50)->nullable();
			$table->string('rw', 10)->nullable();
			$table->string('rt', 10)->nullable();
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
		Schema::drop('trx_pasien_family');
	}

}
