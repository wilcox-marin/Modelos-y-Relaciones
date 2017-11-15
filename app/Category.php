<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorys';

    protected $primaryKey = 'id';

    protected $fillable = ['name',];

    public function article()
    {
    	return $this->hasMany('App\Article');
    }
}
