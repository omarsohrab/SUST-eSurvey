<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class PageController extends Controller
{
    public function home(){

    	if(Sentinel::check()){
    		if(Sentinel::getUser()->inRole('student')){
    			return view('pages.student');
    		}
            elseif(Sentinel::getUser()->inRole('admin')){
                return view('pages.admin.adminLanding');
            }
    		elseif(Sentinel::getUser()->inRole('head')){
    			return view('pages.faculty');
    		}
    		elseif(Sentinel::getUser()->inRole('teacher')){
    			return view('pages.faculty');
    		}else
                return view('pages.student');

           
        }else
            return view('pages.landing');
    }
}
