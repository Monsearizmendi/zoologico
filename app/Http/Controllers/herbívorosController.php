<?php

namespace App\Http\Controllers;
use App\Models\herbívoros;

use Illuminate\Http\Request;

class herbívorosController extends Controller
{
    public function herbívoros (){
        $herbívoros = herbívoros::all();
        return view('about',['herbívoros' => $herbívoros]);
    }
}
