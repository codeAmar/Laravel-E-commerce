<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    //
    public function getContact(){
        return view('shop.contact');
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'comments'=>'required | max:500'
        ]);

        $contact = new Contact([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'comments'=>$request->input('comments')
        ]);

        $contact->save();

        return redirect()->route('contactFormSubmit');
    }

    public function getFormSubmit(){
        return view('shop.contactFormSubmit');
    }
}
