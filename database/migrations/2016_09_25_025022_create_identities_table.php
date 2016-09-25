<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function(Blueprint $table)
        {
            // $table->index(['provider_id','provider'], 'id');
            $table->mediumIncrements('id');
            $table->unique(['provider_id','provider']);
            $table->string('provider_id')->nullable();
            $table->string('provider');
            $table->string('email')->nullable();
            $table->json('data')->nullable();
            $table->mediumInteger('related_id')->unsigned()->nullable();
            $table->smallInteger('table_id')->unsigned()->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();

                    // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
