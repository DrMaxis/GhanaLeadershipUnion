<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic_title')->nullable();
            $table->text('topic_description')->nullable();
            $table->string('topic_image')->nullable();
            $table->string('topic_secondary_image')->nullable();
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
        Schema::dropIfExists('news_topics');
    }
}
