<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComBulanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_bulan', function(Blueprint $table)
		{
			$table->string('bulan_cd', 2)->nullable();
			$table->string('bulan_nm', 12)->nullable();
			$table->string('triwulan_cd', 3)->nullable();
			$table->string('triwulan_nm', 12)->nullable();
			$table->integer('day')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_bulan');
	}

}
