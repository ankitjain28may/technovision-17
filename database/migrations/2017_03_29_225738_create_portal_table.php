<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portal', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('approveRequest')->nullable();
            $table->tinyInteger('sendRequest')->nullable();
            $table->unsignedInteger('patientId');
            $table->unsignedInteger('doctorId');
            $table->string('disease')->nullable();
            $table->text('medicines')->nullable();
            $table->text('prescription')->nullable();
            $table->foreign('patientId')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('portal');
    }
}
