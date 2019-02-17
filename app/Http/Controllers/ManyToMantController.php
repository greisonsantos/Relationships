<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

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
}
