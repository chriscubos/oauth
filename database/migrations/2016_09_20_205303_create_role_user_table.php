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

class CreateRoleUserTable extends Migration {

    public function up()
    {

        Schema::create('role_user', function(Blueprint $table)
        {
			$table->primary(['role_id','user_id',], 'role_user__id');

					$table->smallInteger('role_id')->unsigned()->nullable();
					// $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

					$table->mediumInteger('user_id')->unsigned()->nullable();
					// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
