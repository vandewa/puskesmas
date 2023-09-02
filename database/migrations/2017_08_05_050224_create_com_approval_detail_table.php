<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComApprovalDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('com_approval_detail', function(Blueprint $table)
		{
			$table->string('approval_cd', 20);
			$table->string('role_cd', 20);
			$table->integer('approval_order')->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->primary(['approval_cd','role_cd'], 'com_approval_detail_pkey');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('com_approval_detail');
	}

}
