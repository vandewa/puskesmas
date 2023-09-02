<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComPaymentTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_payment_type', function(Blueprint $table)
		{
			$table->string('top_cd', 20)->primary('com_payment_type_pkey');
			$table->string('top_nm', 100)->nullable();
			$table->integer('top_total_day')->nullable();
			$table->integer('top_total_month')->nullable();
			$table->string('modi_id', 20)->nullable();
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
		Schema::drop('com_payment_type');
	}

}
