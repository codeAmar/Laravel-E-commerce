<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

class indexController extends Controller
{
    //
    public function index(){
        $comics = Comics::all();

        return view('shop.home',['comics'=>$comics]);
    }
}
