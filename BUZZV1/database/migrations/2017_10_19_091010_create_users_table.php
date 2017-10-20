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
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('profil-image')->nullable();
            $table->string('pin_code');
            $table->boolean('is_confirmed')->default(false);
            $table->string('language')->nullable();
            $table->boolean('is_activated')->default(false);
            $table->boolean('cgu')->default(false);
            $table->string('remember_token', 100)->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
