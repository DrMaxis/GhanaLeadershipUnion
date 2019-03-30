<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsArticle extends Model
{
    protected $table = 'news_articles';
    protected $fillable = ['slug','meta_info','article_title','article_description','article_content','article_image','article_secondary_image'];


    public function topic() {
        return $this->belongsTo('App\NewsTopic');
    }

    public function categories() {
        return $this->belongsToMany('App\NewsCategory', 'article_category');
    }

}
