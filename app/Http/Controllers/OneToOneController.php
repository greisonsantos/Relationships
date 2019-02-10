<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Location;

class OneToOneController extends Controller
{
    //

    public function OneToOne(){

      // $country= Country::find(1);

     //so existe um pais com esse nome logo posso passar o metodo firt
      $country= Country::where('name','China')->get()->first();
      echo $country->name;

      //pode passar no formato de metodo ou atributo
      //$location=$country->location;


      $location=$country->location()->get()->first();
      echo "<hr>Latitude {$location->latitude} <br>";
      echo "<hr>Latitude {$location->longitude} <br>";
    }
}
