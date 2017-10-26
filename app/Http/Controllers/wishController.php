<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Comics;
use App\Wish;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class wishController extends Controller
{
    //
    public function getAddToWish(Request $request , $id)
    {
        $comic = Comics::find($id);
        $oldWish = Session::has('wish')? Session::get('wish'):null;
        $wish = new Wish($oldWish);
        $wish->addWish($comic,$comic->id);

        $request->session()->put('wish',$wish);
//        dd($cart);
        return redirect()->route('index');

    }
}
