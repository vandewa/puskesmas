<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxPasienIdentityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_pasien_identity', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('pasien_cd', 21);
			$table->string('identity_tp', 20)->nullable();
			$table->string('id_no', 50)->nullable();
			$table->string('address', 1000)->nullable();
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
		Schema::drop('trx_pasien_identity');
	}

}
