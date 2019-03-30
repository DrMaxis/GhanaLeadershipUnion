<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTopic extends Model
{
    protected $table = 'news_topics';
    protected $fillable = ['topic_title', 'topic_description', 'topic_image','topic_secondary_image'];


    public function articles() {
        return $this->hasMany('App\NewsArticle');
    }

    public function categories() {
        return $this->belongsToMany('App\NewsCategory', 'topic_category');
    }
}
