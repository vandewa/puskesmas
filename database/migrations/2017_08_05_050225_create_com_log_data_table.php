<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComLogDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_log_data', function(Blueprint $table)
		{
			$table->bigInteger('seq_no', true);
			$table->string('table_nm', 100)->nullable();
			$table->string('table_pk', 100)->nullable();
			$table->text('old_value')->nullable();
			$table->text('new_value')->nullable();
			$table->string('change_tp', 20)->nullable();
			$table->string('change_ds', 1000)->nullable();
			$table->dateTime('log_date')->nullable();
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
		Schema::drop('com_log_data');
	}

}
