<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model

{
 
    protected $fillable =['name'];

    // retorna apenas um item
    // quando chamar o metodo location  e retornado o pais daquele método

    public function location(){
      return $this->hasOne(Location::class);

       // caso o nome da chave estarngeira esteja diferente do padrão
      // return $this->hasOne(Location::class, 'coutry_id', 'location_id');
    }
}
