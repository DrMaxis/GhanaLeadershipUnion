<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    protected $table = 'article_category';

    protected $fillable = ['news_article_id', 'news_category_id'];
}
