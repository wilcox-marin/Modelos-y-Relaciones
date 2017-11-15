<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_Tag extends Model
{
    protected $table = 'article_tag';

    protected $primaryKey = 'id';

    protected $fillable = ['article_id','tag_id',];
}
