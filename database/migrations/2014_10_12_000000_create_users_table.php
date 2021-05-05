<?php
/**
Author: Aubrey Nickerson
Date: May 9th, 2020
Program: 2014_10_12_000000_create_users_table.php
Project: Counselling Website
**/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// This migration creates a Users table.
// The purpose is to create a user when a user
// wishes to register for an appointment. 
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the users table
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // ID AUTO-INCREMENT
            $table->string('firstname'); // FIRST_NAME VARCHAR
            $table->string('lastname'); // LAST_NAME VARCHAR
            $table->string('email')->unique(); // EMAIL VARCHAR UNIQUE
            $table->timestamp('email_verified_at')->nullable(); // EMAIL_VERIFIED_AT TIMESTAMP 
            $table->string('password'); // PASSWORD VARCHAR
            $table->rememberToken(); // REMEMBER_ME TOKEN
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
        Schema::dropIfExists('users');
    }
}
