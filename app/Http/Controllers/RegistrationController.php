<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use App\Dept;
class RegistrationController extends Controller
{	
	//for students routes
    public function register(){
        $depts = DB::table('dept')->get();
    	return view('authentication.register',['depts' => $depts]);
    }

    public function postRegister(Request $request){
    	$user = Sentinel::registerAndActivate($request->all());
    	$role = Sentinel::findRoleBySlug('student');
    	$role->users()->attach($user);
    	return redirect('/');
    }

    //for faculty routes
    public function registerFaculty(){
        $depts = DB::table('dept')->get();
        return view('authentication.registerfaculty',['depts' => $depts]);

    }

    public function postRegisterFaculty(Request $request){
    	$user = Sentinel::registerAndActivate($request->all());
    	$role = Sentinel::findRoleBySlug('teacher');
    	$role->users()->attach($user);
    	return redirect('/');
    }
}
