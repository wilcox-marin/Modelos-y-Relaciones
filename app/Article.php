<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = ['title','summary','description','file','category_id',];

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function galery()
    {
    	return $this->hasMany('App\Galery');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
