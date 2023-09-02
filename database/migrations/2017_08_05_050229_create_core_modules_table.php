<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoreModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_modules', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name');
			$table->string('folder')->unique();
			$table->text('source_url');
			$table->text('description')->nullable();
			$table->boolean('status');
			$table->timestamps();
			$table->index(['name','status']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('core_modules');
	}

}
