<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Survey;
use Session;
use Sentinel;

class StudentController extends Controller
{
    public function surveys()
    {
    	$id = Sentinel::getUser()->id;
    	$surveys = DB::table('surveys')
	        // ->leftjoin('courses', 'surveys.course_code', '=', 'courses.id')
	        ->leftjoin('enrolled', 'surveys.course_code', '=', 'enrolled.course_id')
	        ->where('enrolled.user_id', $id)
	        ->get();
        return view('pages.student.surveys',compact('surveys'));
	    
    }
}
