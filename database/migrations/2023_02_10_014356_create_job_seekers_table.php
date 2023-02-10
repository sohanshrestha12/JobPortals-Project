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
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('category');
            $table->string('city');
            $table->string('location');
            $table->string('role');
            $table->bigInteger('phoneno');
            $table->string('description',500)->nullable();
            $table->string('ProfileImg')->default('defaultImg.png');
            $table->string('ProfileImgPath')->default('public/default/defaultImg.jpg');
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
        Schema::dropIfExists('job_seekers');
    }
};
