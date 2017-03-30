<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorsProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('qualification')->nullable();
            $table->string('speciality')->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('contact')->nullable();
            $table->unsignedInteger('doctorId');
            $table->string('experience', 10);
            $table->text('address', 1000)->nullable();
            $table->string('city', 100)->nullable();
            $table->integer('fees')->nullable();
            $table->foreign('doctorId')->references('id')->on('doctors')->onDelete('cascade');
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
        Schema::dropIfExists('doctorsProfile');
    }
}
