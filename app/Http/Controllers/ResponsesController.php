<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Survey;
use App\Questions;
use App\Options;
use App\Responses;
use App\Perticipation;
use Session;
use Sentinel;

class ResponsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::set('questions',null);
        Session::set('index',null);
        $msg = 'Successfull!! Survey Completed';
        Session::set('massage',$msg);
        return redirect()->action('StudentController@surveys');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Sentinel::getUser()->id;
        $rs = new Responses;
        $pr = new Perticipation;
        $qsns = Session::get('questions');
        $i=Session::get('index');

        if($i==0){
            $pr->survey_id=$qsns[$i]->survey_id;
            $pr->user_id=$id;
            $pr->anonim=$request->anspert;
            $pr->save();
        }
        $rs->user_id=$id;
        $rs->question_id=$qsns[$i]->id;
        $rs->question_type=$qsns[$i]->question_type;
        $rs->survey_id=$qsns[$i]->survey_id;
        $rs->res1=$request->ans;
        
        $sid = $qsns[$i]->survey_id;
        $rs->save();
        return redirect()->action('ResponsesController@show',[$sid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        if(Session::get('questions')){
            $i=Session::get('index');
            $i++;
            Session::set('index',$i);
            $srvy = DB::table('surveys')->where('survey_id', $id)->first();
            return view('pages.student.createResponse',compact('srvy'));
        }else{
            $i=0;
            $olds = DB::table('questions')->where('survey_id', '=', $id)->get();
            Session::set('questions',$olds);
            Session::set('index',$i);
            $srvy = DB::table('surveys')->where('survey_id', $id)->first();
            return view('pages.student.createResponse',compact('srvy'));
        }      
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d = Session::get('index');
        dd($d);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
