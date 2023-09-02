<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemFormulaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_formula', function(Blueprint $table)
		{
			$table->string('item_cd', 20);
			$table->string('formula_cd', 20);
			$table->decimal('content', 6)->nullable();
			$table->string('unit_cd', 20);
			$table->char('main_st', 1)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['item_cd','formula_cd'], 'inv_item_formula_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_item_formula');
	}

}
