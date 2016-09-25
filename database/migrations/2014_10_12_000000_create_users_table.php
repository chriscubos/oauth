<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('provider_id');
            $table->string('avatar');
            $table->string('latlng');
            $table->ipAddress('ip_address')->nullable();
            $table->boolean('active')->nullable();
            $table->mediumInteger('related_id')->unsigned();
            $table->smallInteger('table_id')->unsigned();
            $table->mediumInteger('user_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
