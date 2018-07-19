<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['name','faculty_id'];

    public function faculty()
    {
    	return $this->belongsTo('App\Faculty');
    }
}
