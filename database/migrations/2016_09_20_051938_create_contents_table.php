<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contents', function(Blueprint $table) {
			$table->mediumIncrements('id');
			$table->string('title')->nullable();
			$table->string('slug')->unique()->nullable();
			$table->text('content')->nullable();
			$table->string('image_url')->nullable();
			$table->mediumInteger('related_id')->unsigned()->nullable();
			$table->smallInteger('table_id')->unsigned()->nullable();
			$table->smallInteger('status_id')->unsigned()->nullable();
			$table->json('meta')->nullable();
			$table->mediumInteger('user_id')->unsigned()->default(0);
			$table->mediumInteger('content_id')->unsigned()->nullable();
			$table->boolean('active')->default(0);
			$table->timestamp('created_at')->nullable();
			$table->timestamp('updated_at')->nullable();
			$table->timestamp('deleted_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
