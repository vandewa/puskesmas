<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxIcdgroupItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_icdgroup_item', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('group_cd', 20);
			$table->string('icd_cd', 20);
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
		Schema::drop('trx_icdgroup_item');
	}

}
