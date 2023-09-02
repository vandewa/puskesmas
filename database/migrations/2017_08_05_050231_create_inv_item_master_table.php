<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvItemMasterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_item_master', function(Blueprint $table)
		{
			$table->string('item_cd', 20)->primary('inv_item_master_pkey');
			$table->string('type_cd', 20);
			$table->string('unit_cd', 20);
			$table->string('item_nm', 100)->nullable();
			$table->string('barcode', 50)->nullable();
			$table->string('currency_cd', 20)->nullable();
			$table->decimal('item_price_buy', 15, 0)->nullable();
			$table->decimal('item_price', 10, 0)->nullable();
			$table->string('vat_tp', 20)->nullable();
			$table->decimal('ppn', 5)->nullable();
			$table->decimal('reorder_point', 10)->nullable();
			$table->decimal('minimum_stock', 10)->nullable();
			$table->decimal('maximum_stock', 10)->nullable();
			$table->string('generic_st', 20)->nullable();
			$table->string('active_st', 20)->nullable();
			$table->string('inventory_st', 1)->nullable();
			$table->string('tariftp_cd', 20)->nullable();
			$table->string('modi_id', 20)->nullable();
			$table->timestamps();
			$table->string('obat_st', 20)->nullable();
			$table->string('subkelompok_cd', 20)->nullable();
			$table->string('golongan_cd', 20)->nullable();
			$table->string('subgolongan_cd', 20)->nullable();
			$table->string('kategori_cd', 20)->nullable();
			$table->string('subkategori_cd', 20)->nullable();
			$table->string('kelompok_cd', 100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inv_item_master');
	}

}
