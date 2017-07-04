<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use Session;
use App\Survey;
use App\Questions;
use App\Options;
use App\Responses;
use App\Perticipation;
class TeacherController extends Controller
{
   public function submitSurvey()
    {
         Session::set('survey_id',null);
         $msg = 'Congratulations!! You created a survey successfully.';
         Session::set('massage',$msg);
         return redirect()->action('SurveyController@index');
    }

    public function result($id){
    	$srvy = DB::table('surveys')->where('survey_id', $id)->first();
    	$rs =  DB::table('responses')->where('survey_id', '=', $id)->get();
    	$qsns = DB::table('questions')->where('survey_id', '=', $id)->get();
    	
    	return view('pages.responses.responsefaculty',compact('rs','qsns','srvy'));
    }
    
}
