<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use App\Models\Jewellery;
use Illuminate\Http\Request;

class JewelleryController extends Controller
{
    public function insert(Request $request){
        $jewellery = new Jewellery();
        $clients = new Clients();
        $jewellery->jewelleries = "Pandora";
        $clients->name = "Aruzhan";
        $clients->email = "Aruzhan@gmail.com";
        $clients->order_number = 91021;
        $clients->save();
        $clients->jewlleries()->save($jewellery);
        return "Record has been created!";
    }
    public function fetchdata($id){
      $jewellery = Clients::find($id)->jewelleries;
      return $jewellery;
    }
}
