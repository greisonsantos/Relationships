<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //
    protected $fillable=['name','initials'];

    public function country(){

    	return $this->belongsTo(Country:: Class);
    }


    public function cities(){

    	return $this->hasMany(City:: Class);
    }
}
