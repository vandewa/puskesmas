<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxInsuranceMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_insurance_member', function(Blueprint $table)
		{
			$table->string('insurance_member_cd', 20)->primary('trx_insurance_member_pkey');
			$table->string('insurance_cd', 20);
			$table->string('insurance_member_nm', 100)->nullable();
			$table->char('active_st', 1)->nullable();
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
		Schema::drop('trx_insurance_member');
	}

}
