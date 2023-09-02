<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoreAssetOwnerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_asset_owner', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 15)->index();
			$table->string('name', 30);
			$table->string('address', 100)->nullable();
			$table->string('city', 15)->nullable();
			$table->string('cell_phone', 25)->nullable();
			$table->integer('status');
			$table->string('cab_id', 10);
			$table->string('photo')->nullable();
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
		Schema::drop('core_asset_owner');
	}

}
