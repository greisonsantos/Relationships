<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Company;

class ManyToMantController extends Controller
{
    //

    public function ManyToManay(){
       
       //
    	$city= City::where('name','São Paulo')->get()->first();
        //var_dump($city);
       
        $companies= $city->companies;

        foreach ($companies as $company) {
        	echo "$company->name <br>";
        }
    }

    public function ManyToManayInverse(){

        $company= Company::where('name','especializa ti')->get()->first();

         $cities= $company->cities;
        foreach ($cities as $city) {
            echo "$city->name <br>";
        }

    }

    public function ManyToManayInsert(){

    $dataForm=[3,4,5];

    $company= Company::find(1);

   // attach sempre incrementa mais
   // $company->cities()->attach($dataForm);
   //  não cadastra novamente os dados somente sincroniza
    //os dados que já estão no bd nao são inseridos novamente

    //contrario do attach remove um ou mais itens
    // $company->cities()->attach($dataForm);
    $company->cities()->sinc($dataForm);

    }
}
