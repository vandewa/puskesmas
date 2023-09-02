<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxDokterPropertyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_dokter_property', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('dr_cd', 20)->nullable();
			$table->dateTime('datetime')->nullable();
			$table->string('dr_property_cd', 20)->nullable();
			$table->string('dr_property_value', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->time('time_start')->nullable();
			$table->time('time_end')->nullable();
			$table->bigInteger('jadwal_seqno')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trx_dokter_property');
	}

}
