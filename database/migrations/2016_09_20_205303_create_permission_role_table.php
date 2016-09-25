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

class CreatePermissionRoleTable extends Migration {

    public function up()
    {

        Schema::create('permission_role', function(Blueprint $table)
        {
			$table->primary(['permission_id','role_id',], 'permission_role__id');

					$table->mediumInteger('permission_id')->unsigned()->nullable();
					// $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

					$table->smallInteger('role_id')->unsigned()->nullable();
					// $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}
