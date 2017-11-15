<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $primaryKey = 'id';

    protected $fillable = ['name','lastname','file','user_id'];


    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
