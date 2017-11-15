<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    protected $table = 'galerys';

    protected $primaryKey = 'id';

    protected $fillable = ['name','article_id',];

    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
