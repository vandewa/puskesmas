<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComLogDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_log_detail', function(Blueprint $table)
		{
			$table->bigInteger('seq_no');
			$table->string('column_nm', 100);
			$table->string('old_value', 1000)->nullable();
			$table->string('new_value', 1000)->nullable();
			$table->string('change_tp', 20)->nullable();
			$table->string('change_ds', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['seq_no','column_nm'], 'com_log_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_log_detail');
	}

}
