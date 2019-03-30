<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('topic_id');
            $table->integer('user_id');
            $table->string('slug')->unique()->nullable();
            $table->longText('meta_info')->nullable();
            $table->string('article_title')->nullable();
            $table->text('article_description')->nullable();
            $table->longText('article_content')->nullable();
            $table->string('article_image')->nullable();
            $table->string('article_secondary_image')->nullable();
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
        Schema::dropIfExists('news_articles');
    }
}
