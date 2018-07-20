<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name','gender','phone','email','address','nationality_id','date_of_birth','faculty_id','module_id'];

    public function faculty()
    {
    	return $this->hasOne('App\Faculty');
    }

    public function module()
    {
    	return $this->hasOne('App\Module');
    }

    public function nationality()
    {
    	return $this->hasOne('App\Nationality');
    }
}
