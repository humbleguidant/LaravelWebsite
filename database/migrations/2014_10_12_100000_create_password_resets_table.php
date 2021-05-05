<?php
/**
Author: Aubrey Nickerson
Date: May 9th, 2020
Program: 2014_10_12_100000_create_password_resets_table.php
Project: Counselling Website
**/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// This migration creates a passwords_resets table
// It contains the email, token, and the date that 
// the password was reset.
class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create the database table
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index(); // EMAIL VARCHAR
            $table->string('token'); // TOKEN VARCHAR
            $table->timestamp('created_at')->nullable(); // CREATED_AT TIMESTAMP
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}
