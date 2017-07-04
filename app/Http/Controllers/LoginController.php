<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Sentinel;

class LoginController extends Controller
{
    public function login(){
    	return view('authentication.exlogin');
    }

    public function postLogin(Request $request){
    	Sentinel::authenticate($request->all());
    	if(Sentinel::check()==false){
            $err = "Email or Password invalid!! Please Try again";
            Session::set('logerr',$err);
    		return redirect('/login');
    	}else{
    		return redirect('/');
    	}
    }
    
    public function logout(){
    	Sentinel::logout();
    	return redirect('/');
    }
}
