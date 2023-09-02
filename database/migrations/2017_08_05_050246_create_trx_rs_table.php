<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxRsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_rs', function(Blueprint $table)
		{
			$table->string('rs_cd', 20)->primary('trx_rs_pkey');
			$table->string('rs_nm', 100)->nullable();
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
			$table->string('rstp_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->string('pt_nm', 100)->nullable();
			$table->string('regional_cd', 20)->nullable();
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
		Schema::drop('trx_rs');
	}

}
