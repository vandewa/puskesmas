<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComAccountTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_account', function(Blueprint $table)
		{
			$table->string('account_cd', 20)->primary('com_account_pkey');
			$table->string('accgroup_cd', 20)->nullable();
			$table->string('account_nm', 100)->nullable();
			$table->decimal('default_amount', 15, 0)->nullable();
			$table->integer('order_no')->nullable();
			$table->char('print_single_st', 1)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('coa_cd', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_account');
	}

}
