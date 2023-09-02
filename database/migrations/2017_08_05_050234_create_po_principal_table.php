<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePoPrincipalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('po_principal', function(Blueprint $table)
		{
			$table->string('principal_cd', 20)->primary('po_principal_pkey');
			$table->string('principal_nm', 100)->nullable();
			$table->string('address', 1000)->nullable();
			$table->string('city', 100)->nullable();
			$table->string('province', 100)->nullable();
			$table->string('postcode', 20)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('mobile', 20)->nullable();
			$table->string('fax', 20)->nullable();
			$table->string('email', 100)->nullable();
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
		Schema::drop('po_principal');
	}

}
