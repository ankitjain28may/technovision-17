<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientsProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('age')->nullable();
            $table->string('gender', 6)->nullable();
            $table->string('contact')->nullable();
            $table->unsignedInteger('patientId');
            $table->string('disease')->nullable();
            $table->text('symptoms')->nullable();
            $table->string('city', 100)->nullable();
            $table->foreign('patientId')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('patientsProfile');
    }
}
