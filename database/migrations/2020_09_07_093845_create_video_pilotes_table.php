<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoPilotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_pilotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ville')->default('cotonou');
            $table->string('title');
            $table->string('specvideo');
            $table->string('resume');
            $table->string('video');
            $table->string('photo');
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
        Schema::dropIfExists('video_pilotes');
    }
}
