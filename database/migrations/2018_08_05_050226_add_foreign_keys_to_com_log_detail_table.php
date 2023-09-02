<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComLogDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('com_log_detail', function(Blueprint $table)
		{
			$table->foreign('seq_no', 'fkcom_log_de353039')->references('seq_no')->on('com_log_data')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('com_log_detail', function(Blueprint $table)
		{
			$table->dropForeign('fkcom_log_de353039');
		});
	}

}
