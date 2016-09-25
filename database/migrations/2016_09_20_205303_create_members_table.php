<?php 
/**
 * @project DavaoIT (Davao IT)
 * @package Users
 * @author Christopher John Cubos (philippineoutsourcing@gmail.com)
 * @copyright 2016 Philippine Global Outsourcing. All Rights Reserved.
 * @since September 20, 2016 08:09:03 pm (Tuesday)
 */


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration {

    public function up()
    {

        Schema::create('members', function(Blueprint $table)
        {
			// $table->primary(['friend_id','user_id',], 'friend_user__id');


					$table->increments('id');
					$table->mediumInteger('user_id')->unsigned()->nullable();
					// $table->foreign('friend_id')->references('id')->on('users')->onDelete('cascade');

					$table->mediumInteger('related_id')->unsigned()->nullable();
					$table->smallInteger('table_id')->unsigned()->nullable();
					// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

					$table->smallInteger('type_id')->unsigned()->nullable();
					// $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');

					$table->smallInteger('status_id')->unsigned()->nullable();
					// $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

					$table->boolean('active')->nullable();
					$table->timestamp('created_at')->nullable();
					$table->timestamp('updated_at')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
