<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // retorna apenas um item
    // quando chamar o metodo location  e retornado o pais daquele método

    public function location(){
      return $this->hasOne(Location::class);
    }
}
