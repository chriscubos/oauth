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

class CreateRolesTable extends Migration {

    public function up()
    {

        Schema::create('roles', function(Blueprint $table)
        {
					$table->smallIncrements('id');
					$table->string('role')->nullable();
					$table->string('description')->nullable();
					$table->boolean('active')->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
