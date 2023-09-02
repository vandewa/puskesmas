<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoreAssetQuarterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_asset_quarter', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('year')->index();
			$table->integer('quarter')->nullable();
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->date('mid_date')->nullable();
			$table->smallInteger('closed_status')->nullable();
			$table->integer('create_by');
			$table->integer('update_by');
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
		Schema::drop('core_asset_quarter');
	}

}
