<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComShiftTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_shift', function(Blueprint $table)
		{
			$table->string('shift_cd', 20)->primary('com_shift_pkey');
			$table->string('shift_nm', 100)->nullable();
			$table->time('time_start')->nullable();
			$table->time('time_end')->nullable();
			$table->decimal('saldo_start', 15, 0)->nullable();
			$table->char('login_st', 1)->nullable();
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
		Schema::drop('com_shift');
	}

}
