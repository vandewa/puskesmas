<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTrxClinicalPathTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trx_clinical_path', function(Blueprint $table)
		{
			$table->foreign('cp_tp_cd', 'fktrx_clinic546977')->references('cp_tp_cd')->on('trx_cp_group')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trx_clinical_path', function(Blueprint $table)
		{
			$table->dropForeign('fktrx_clinic546977');
		});
	}

}
