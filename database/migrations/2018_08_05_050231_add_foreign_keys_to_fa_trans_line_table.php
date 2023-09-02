<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFaTransLineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fa_trans_line', function(Blueprint $table)
		{
			$table->foreign('trans_id', 'fk_fa_trans_line_p')->references('trans_id')->on('fa_trans_header')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fa_trans_line', function(Blueprint $table)
		{
			$table->dropForeign('fk_fa_trans_line_p');
		});
	}

}
