<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_category', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('news_article_id')->unsigned()->nullable();

            $table->foreign('news_article_id')->references('id')
                ->on('news_articles')->onDelete('cascade');

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
        Schema::dropIfExists('article_category');
    }
}
