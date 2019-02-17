<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
    //retorna todas as empresas de uma cidade
    //a tabela que faz o pivo deve seguir o nome em orde alfabetica das tabelas a que se ralaciona
    public function companies(){
    	return $this->belongsToMany(Company::class, 'company_city');
    }
}
