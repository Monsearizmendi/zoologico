<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carnivoros;
use App\Models\herbívoros;

class carnivorosController extends Controller
{
    public function carnivoros (){
        $carnivoros = carnivoros::all();
        $herbívoros = herbívoros::all();
        return view('about',['carnivoros' => $carnivoros,'herbívoros'=> $herbívoros]);
    }
}
