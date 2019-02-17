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
}
