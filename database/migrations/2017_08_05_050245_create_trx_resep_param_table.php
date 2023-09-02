<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxResepParamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_resep_param', function(Blueprint $table)
		{
			$table->integer('resepparam_seqno')->primary('trx_resep_param_pkey');
			$table->string('resepparam_cd', 20);
			$table->string('param_nm', 100)->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->decimal('amount', 15, 0)->nullable();
			$table->char('updatable', 1)->nullable();
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
		Schema::drop('trx_resep_param');
	}

}
