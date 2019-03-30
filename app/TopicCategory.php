<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicCategory extends Model
{
    protected $table = 'topic_category';

    protected $fillable = ['news_topic_id', 'news_category_id'];
}
