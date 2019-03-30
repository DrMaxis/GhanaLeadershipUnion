<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('news_topic_id')->unsigned()->nullable();

            $table->foreign('news_topic_id')->references('id')
                    ->on('news_topics')->onDelete('cascade');

            $table->integer('news_category_id')->unsigned()->nullable();

            $table->foreign('news_category_id')->references('id')
                    ->on('news_categories')->onDelete('cascade');

           


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
        Schema::dropIfExists('topic_category');
    }
}
