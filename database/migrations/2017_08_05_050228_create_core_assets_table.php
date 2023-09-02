<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoreAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('core_assets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->uuid('uuid');
			$table->string('asset_code', 16)->unique();
			$table->string('asset_desc', 100)->nullable();
			$table->string('asset_group', 16)->nullable();
			$table->integer('asset_level')->nullable();
			$table->string('asset_type', 10)->nullable();
			$table->bigInteger('kode_dep')->nullable();
			$table->string('account_code', 25)->nullable();
			$table->string('ext_name', 100)->nullable();
			$table->string('alias_name', 50)->nullable();
			$table->bigInteger('acq_cost')->nullable();
			$table->dateTime('acq_date')->nullable();
			$table->string('custodian', 15)->nullable();
			$table->string('manufacturer', 50)->nullable();
			$table->float('quantity', 10, 0)->nullable();
			$table->dateTime('last_maint_date')->nullable();
			$table->dateTime('date_added')->nullable();
			$table->smallInteger('status')->nullable();
			$table->string('currency_id', 5)->nullable();
			$table->dateTime('transfer_date')->nullable();
			$table->integer('transfer_event')->nullable();
			$table->string('type_of_depreciation', 5)->nullable();
			$table->float('expected_life', 10, 0)->nullable();
			$table->bigInteger('salvage_value')->nullable();
			$table->float('years_depreciation', 10, 0)->nullable();
			$table->bigInteger('current_value')->nullable();
			$table->string('model_no', 25)->nullable();
			$table->string('order_number', 25)->nullable();
			$table->string('asset_number', 25)->nullable();
			$table->string('serial_number', 25)->nullable();
			$table->string('rego_number', 25)->nullable();
			$table->dateTime('rego_due_date')->nullable();
			$table->float('height', 10, 0)->nullable();
			$table->float('width', 10, 0)->nullable();
			$table->float('depth', 10, 0)->nullable();
			$table->float('weight', 10, 0)->nullable();
			$table->string('color', 15)->nullable();
			$table->string('supplier_code', 15)->nullable();
			$table->dateTime('warranty_start')->nullable();
			$table->dateTime('warranty_finish')->nullable();
			$table->string('barcode_number', 40)->nullable();
			$table->string('file_name')->nullable();
			$table->string('asset_uom', 10)->nullable();
			$table->string('doc_type', 10)->nullable();
			$table->string('doc_custom_no', 25)->nullable();
			$table->string('doc_custom_no_ext', 25)->nullable();
			$table->dateTime('doc_custom_date')->nullable();
			$table->string('do_no', 25)->nullable();
			$table->dateTime('do_date')->nullable();
			$table->string('grn_no', 25)->nullable();
			$table->dateTime('utilization_date')->nullable();
			$table->string('room', 25)->nullable();
			$table->smallInteger('export_status')->nullable();
			$table->string('bg_no', 25)->nullable();
			$table->dateTime('bg_exp_date')->nullable();
			$table->smallInteger('bg_status')->nullable();
			$table->string('cab_id', 10)->nullable();
			$table->string('permit_doc_no', 50)->nullable();
			$table->string('invoice_no', 25)->nullable();
			$table->string('pack_list_no', 25)->nullable();
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
		Schema::drop('core_assets');
	}

}
