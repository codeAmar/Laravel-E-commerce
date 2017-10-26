<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Comics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class productController extends Controller
{
    //
    public function getAddToCart(Request $request , $id)
    {
        $comic = Comics::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->addComic($comic,$comic->id);

        $request->session()->put('cart',$cart);
//        dd($cart);
        return redirect()->route('index');

    }
}
