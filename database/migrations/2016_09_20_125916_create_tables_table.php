<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tables', function(Blueprint $table)
		{
			$table->smallIncrements('id');
			$table->string('table');
			$table->smallInteger('table_id')->nullable();
			$table->string('namespace')->nullable();
			$table->string('path')->nullable();
			$table->boolean('active')->default(true);
			$table->unique(['table_id', 'table']);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('tables');
	}
}
