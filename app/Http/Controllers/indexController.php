<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function getIndex(){
        $comics = Comics::all();

        return view('shop.home',['comics'=>$comics]);
    }
}
