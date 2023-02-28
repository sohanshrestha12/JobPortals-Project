<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('category')->nullable();
            $table->string('city')->nullable();
            $table->string('location')->nullable();
            $table->string('role');
            $table->string('link')->nullable();
            $table->bigInteger('phoneno')->nullable();
            $table->string('description',500)->nullable();
            $table->string('ProfileImg')->default('defaultImg.png');
            $table->string('ProfileImgPath')->default('public/default/defaultImg.jpg');
            $table->string('Skills',200)->nullable();
            $table->string('Resume')->nullable();
            $table->date('Joined_year')->nullable();
            $table->date('Passed_year')->nullable();
            $table->date('DateofBirth')->nullable();
            $table->string('AboutMe',500)->nullable();
            $table->string('Position')->nullable();
            $table->string('Organization')->nullable();
            $table->string('University')->nullable();
            $table->string('Industry')->nullable();
            $table->string('Municipality')->nullable();
            $table->string('Institution')->nullable();
            $table->string('District')->nullable();
            $table->string('Level')->nullable();
            $table->string('JobTime')->nullable();
            $table->string('Degree')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Roles',500)->nullable();
            $table->string('Objective',500)->nullable();


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
};
