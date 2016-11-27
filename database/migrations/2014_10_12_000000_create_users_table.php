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
            $table->increments('id');
            $table->string('document');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('user')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->date('birthday')->nullable();
            $table->string('picture')->nullable();
            $table->string('bank')->nullable();
            $table->bigInteger('account')->nullable();
            $table->string('status');
            $table->bigInteger('added_user_id');
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
