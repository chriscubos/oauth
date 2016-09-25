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

class CreatePermissionsTable extends Migration {

    public function up()
    {

        Schema::create('permissions', function(Blueprint $table)
        {
					$table->increments('id');
					$table->string('permission', 100)->nullable();
					$table->string('title', 100)->nullable();
					$table->char('active', 0)->nullable();

        });
    }

    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
