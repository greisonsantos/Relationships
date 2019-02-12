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


  //retornar um pais por sua latidude e longitude
    public function OneToOneInverse(){

      $latitude='123';
      $longitude='321';

     $location= Location:: where('latitude',$latitude)
                         ->where('longitude', $longitude)
                         ->get()
                         ->first();

     // se for chamado em forma de metodo pode ser passado condiçoes a mais
     $country= $location->country;

     echo  $country->name;
    }

    //insert one to one
    public function OneToOneInsert(){
        $dataForm= [
          'name'=>'frança',
          'latitude'=> '560',
          'longitude'=> '065',
        ];

      $country= Country::create($dataForm);



      $dataForm['country_id']= $country->id; //id no do name do pais inserido
      $location = Location::create($dataForm);
    }


}
