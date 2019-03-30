<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = 'news_categories';
    protected $fillable = ['category_name', 'category_description', 'category_image','category_secondary_image'];


    public function articles() {
        return $this->belongsToMany('App\NewsArticle', 'article_category');
    }

    public function topics() {
        return $this->belongsToMany('App\NewsTopic','topic_category');
    }
}
