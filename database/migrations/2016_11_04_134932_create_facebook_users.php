<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_users', function($table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('email', 100)->unique()->index();
            $table->string('id_social', 100);
            $table->date('birthday');
            $table->string('country')->nullable();
            $table->timestamps();
            $table->rememberToken();
            $table->string('token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_users');
    }
}
