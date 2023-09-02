<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxCpGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_cp_group', function(Blueprint $table)
		{
			$table->string('cp_tp_cd', 20)->primary('trx_cp_group_pkey');
			$table->string('cp_tp_nm', 100)->nullable();
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
		Schema::drop('trx_cp_group');
	}

}
