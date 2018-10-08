<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Descriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('salary')->nullable();
            $table->integer('experience')->nullable();
            $table->string('education')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('address')->nullable();
            $table->string('position')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('expiration_date')->nullable();
            $table->text('job_description')->nullable();
            $table->text('benefit')->nullable();
            $table->text('other_requirement')->nullable();
            $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
    }
}
