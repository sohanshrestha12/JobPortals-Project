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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->date('ExpiryDate');
            $table->string('Category');
            $table->bigInteger('Salary');
            $table->string('Skills');
            $table->string('Description');
            $table->string('Type');
            $table->string('experience');
            $table->integer('status');
            $table->integer('isdeleted');
            $table->string('message',300)->nullable();
            $table->string('EducationDegree');
            $table->string('Education');
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('users');
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
        Schema::dropIfExists('jobs');
    }
};
