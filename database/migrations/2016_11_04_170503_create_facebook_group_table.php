<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facebook_group', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 100)->nullable();
            $table->string('icon', 100)->nullable();
            $table->string('cover', 100)->nullable();
            $table->text('owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facebook_group');
    }
}
