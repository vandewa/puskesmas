<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemTariftpTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_tariftp', function(Blueprint $table)
		{
			$table->bigInteger('tariftp_no', true);
			$table->string('tariftp_cd', 20);
			$table->string('tariftp_nm', 100)->nullable();
			$table->string('insurance_cd', 20)->nullable();
			$table->decimal('persen_tarif', 5)->nullable();
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
		Schema::drop('inv_item_tariftp');
	}

}
