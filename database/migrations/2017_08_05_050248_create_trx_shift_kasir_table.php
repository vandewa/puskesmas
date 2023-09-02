<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrxShiftKasirTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trx_shift_kasir', function(Blueprint $table)
		{
			$table->integer('seqno', true);
			$table->string('shift_cd', 20);
			$table->string('user_id')->nullable();
			$table->dateTime('time_start')->nullable();
			$table->dateTime('time_end')->nullable();
			$table->decimal('modal', 10, 0)->nullable();
			$table->decimal('amount_tunai', 10, 0)->nullable();
			$table->decimal('amount_non_tunai', 10, 0)->nullable();
			$table->char('close_status')->nullable()->default(0);
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
		Schema::drop('trx_shift_kasir');
	}

}
