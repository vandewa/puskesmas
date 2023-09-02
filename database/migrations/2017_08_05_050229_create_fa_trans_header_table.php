<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaTransHeaderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fa_trans_header', function(Blueprint $table)
		{
			$table->string('trans_id', 25)->primary('fa_trans_header_pkey');
			$table->string('partner_id', 15);
			$table->dateTime('date_trans')->nullable();
			$table->dateTime('date_issued')->nullable();
			$table->integer('umur')->nullable();
			$table->string('unit', 15)->nullable();
			$table->string('metode', 25)->nullable();
			$table->string('id_group', 25)->nullable();
			$table->smallInteger('validasi')->nullable();
			$table->smallInteger('closed')->nullable();
			$table->string('bank_id', 25)->nullable();
			$table->string('type_trans', 15)->nullable();
			$table->integer('periode')->nullable();
			$table->string('acc_dep', 25)->nullable();
			$table->string('dep_aktiva', 25)->nullable();
			$table->smallInteger('disposal')->nullable();
			$table->bigInteger('dp')->nullable();
			$table->string('no_cheque', 50)->nullable();
			$table->string('cab_id', 10)->nullable();
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
		Schema::drop('fa_trans_header');
	}

}
