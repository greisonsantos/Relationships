<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
class OneToManyController extends Controller
{
    //

    public function OneToMany(){
    //listar todos os estados do pais brasil
     // $country=Country::where('name','brasil')->get()->first();
     // echo $country->name;

     // //em formato de atributo
     //  $states= $country->states;
     //  ou metodo
     //  $states= $country->states()->where();

     //  foreach ($states as $state) {
     //  	echo "<hr>$state->initials - $state->name";
     //  }

      $countrys= Country::where('name','LIKE', '%a%')->get();

      foreach ($countrys as $countrys) {
      	 echo "<b> {$countrys->name}</b>";
          $states= $countrys->states()->get();


          foreach ($states as $state) {
              echo " <br> {$state->initials} - {$state->name}";
          }
          echo "<hr>";
      }
    }

    public function ManyToOne(){
       $state= 'São Paulo';
       $state= State::where('name',$state)->get()->first();

       echo "<b> {$state->name} </b>";

       $country= $state->country;

       echo "Pais $country->name";
    }

}
