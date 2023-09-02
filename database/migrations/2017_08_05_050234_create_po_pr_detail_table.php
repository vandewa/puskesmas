<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoPrDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_pr_detail', function(Blueprint $table)
		{
			$table->string('pr_cd', 10);
			$table->string('item_cd', 20);
			$table->string('pos_cd', 20);
			$table->string('unit_cd', 20)->nullable();
			$table->decimal('quantity', 10)->nullable();
			$table->string('note', 1000)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['pr_cd','item_cd','pos_cd'], 'po_pr_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('po_pr_detail');
	}

}
