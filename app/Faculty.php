<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    //
    protected $fillable = ['name'];

    public function modules()
    {
    	return $this->hasMany('App\Module');
    }
}
