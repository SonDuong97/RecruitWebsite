<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobSummaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
       Schema::create('job_summaries', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title');
        $table->text('description');
        $table->integer('id_category');
        $table->integer('id_company');
        $table->integer('id_address')->default(1);
        $table->integer('id_user')->default(1);
        $table->integer('id_job_detail')->unsigned()->nullable();
        
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
        //
        Schema::dropIfExists('job_summaries');
    }
}
