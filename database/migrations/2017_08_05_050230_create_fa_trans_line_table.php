<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaTransLineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fa_trans_line', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('trans_id', 25);
			$table->string('asset_id', 16);
			$table->bigInteger('qty_in')->nullable();
			$table->bigInteger('qty_out')->nullable();
			$table->bigInteger('harga')->nullable();
			$table->bigInteger('price_out')->nullable();
			$table->string('no_account', 25)->nullable();
			$table->string('doc_reff', 25)->nullable();
			$table->float('ppn', 10, 0)->nullable();
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
		Schema::drop('fa_trans_line');
	}

}
