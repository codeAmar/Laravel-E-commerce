<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;



class userController extends Controller
{


    // these are the sign up controller ////////////////////////////////
    public function getSignUp(){
        return view('users.signUp');
    }

    public function postSignUp(Request $request){

        $this->validate($request,[
            'name'=>'required|max:50',
            'email'=>'required|unique:users',
            'password'=>'required|min:6|max:20',
            'address'=>'required',
            'city'=>'required|max:30',
            'state'=>'required|max:20',
            'zip'=>'required|max:10',
            'cell'=>'required|max:11'
        ]);

        $user = new User([
            'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'password'=>bcrypt($request->input('password')),
        'address'=>$request->input('address') . ' ' .$request->input('city') . ' ' . $request->input('state') .  ' ' . $request->input('zip'),
        'cellno'=>$request->input('cell')
        ]);

        $user->save();

        Auth::login($user);

        if (Session::has('oldUrl')) {
            $oldUrl = Session::get('oldUrl');
            Session::forget('oldUrl');
            return redirect()->to($oldUrl);
        }

        return redirect()->route('user.profile');
    }



    // these are the sign In controller ////////////////////////////////
    public function getSignIn(){
        return view('users.signIn');
    }

    public function postSignIn(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        if (Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            if(Session::has('oldUrl')){
                $oldUrl= Session::get('oldUrl');
                Session::forget('oldUrl');
                return redirect()->to($oldUrl);
            }
            return redirect()->route('user.profile');
        }

        return redirect()->back();
    }

    public function profile(){
        return view('users.profile');
    }

    public function logOut(){
        Auth::logout();
        return redirect()->route('user.signIn');
    }


    public function getSettings(){
        return view('users.settings');
    }

}
