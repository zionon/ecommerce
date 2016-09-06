<?php

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
            $table->string('name', 60);
            $table->string('email', 60)->unique();
            $table->string('phone', 11)->nullable()->unique();
            $table->string('password', 60);
            $table->enum('sex', ['男性', '女性'])->nullable();
            $table->timestamp('birthday')->nullable();
            $table->rememberToken();
            $table->string('last_ip', 15);
            $table->timestamp('last_login');
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
        Schema::drop('users');
    }
}
