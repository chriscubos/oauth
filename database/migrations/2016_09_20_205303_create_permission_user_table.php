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

class CreatePermissionUserTable extends Migration {

    public function up()
    {

        Schema::create('permission_user', function(Blueprint $table)
        {
			$table->primary(['permission_id','user_id',], 'permission_user__id');

					$table->mediumInteger('permission_id')->unsigned()->nullable();
					// $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

					$table->mediumInteger('user_id')->unsigned()->nullable();
					// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_user');
    }
}
