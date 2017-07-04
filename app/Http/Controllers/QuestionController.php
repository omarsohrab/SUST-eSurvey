<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Questions;
use App\Options;
use Sentinel;
use Session;

class QuestionController extends Controller
{
    public function addMcq(Request $request){
    	$ques = new Questions;
        $optn = new Options;

		$id=Session::get('survey_id');
    	$ques->survey_id = $id;

    	$ques->question = $request->title;
    	$ques->question_type = 'mcq';
    	$ques->description= $request->opt1.','.$request->opt2.','.$request->opt3.','.$request->opt4;
    	$ques->save();

        $ids=$ques->id;

        $optn->qsn_id = $ids;
        $optn->opt1 = $request->opt1;
        $optn->opt2 = $request->opt2;

        if($request->opt3)
            $optn->opt3 =   $request->opt3;
        else
            $optn->opt3 = null; 
        if($request->opt4)
            $optn->opt4 =   $request->opt4;
        else
            $optn->opt4 = null;  
        if($request->opt5)
            $optn->opt5 =   $request->opt5;
        else
            $optn->opt5 = null; 

        $optn->save();  
    	return redirect()->action('SurveyController@show',[$id]);
    }

    public function addDropdown(Request $request){
        $ques = new Questions;
        $optn = new Options;

        $id=Session::get('survey_id');
        $ques->survey_id = $id;

        $ques->question = $request->title;
        $ques->question_type = 'drp';
        $ques->description= $request->opt1.','.$request->opt2.','.$request->opt3.','.$request->opt4;
        $ques->save();

        $ids=$ques->id;

        $optn->qsn_id = $ids;
        $optn->opt1 = $request->opt1;
        $optn->opt2 = $request->opt2;

        if($request->opt3)
            $optn->opt3 =   $request->opt3;
        else
            $optn->opt3 = null; 
        if($request->opt4)
            $optn->opt4 =   $request->opt4;
        else
            $optn->opt4 = null;  
        if($request->opt5)
            $optn->opt5 =   $request->opt5;
        else
            $optn->opt5 = null; 

        $optn->save();  
        return redirect()->action('SurveyController@show',[$id]);
    }

    public function addParagraph(Request $request){
        $ques = new Questions;

        $id=Session::get('survey_id');
        $ques->survey_id = $id;

        $ques->question = $request->title;
        $ques->question_type = 'para';
        $ques->description= $request->descrip;
        $ques->save();

         
        return redirect()->action('SurveyController@show',[$id]);
    }
     public function addText(Request $request){
        $ques = new Questions;

        $id=Session::get('survey_id');
        $ques->survey_id = $id;

        $ques->question = $request->title;
        $ques->question_type = 'txt';
        $ques->description= $request->descrip;
        $ques->save();

         
        return redirect()->action('SurveyController@show',[$id]);
    }
    public function addSection(Request $request){
        $ques = new Questions;

        $id=Session::get('survey_id');
        $ques->survey_id = $id;

        $ques->question = $request->title;
        $ques->question_type = 'section';
        $ques->description= 'This is for section';
        $ques->save();

         
        return redirect()->action('SurveyController@show',[$id]);
    }
    public function addDate(Request $request){
        $ques = new Questions;

        $id=Session::get('survey_id');
        $ques->survey_id = $id;

        $ques->question = $request->title;
        $ques->question_type = 'date';
        $ques->description= 'This is for date';
        $ques->save();

         
        return redirect()->action('SurveyController@show',[$id]);
    }
    public function submiSurvey(Request $request){
        Session::set('survey_id',null);
        return redirect('/');
    }
}
