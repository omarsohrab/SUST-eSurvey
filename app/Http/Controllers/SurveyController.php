<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Survey;

use Sentinel;
use Session;


class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Sentinel::getUser()->id;
        

        if(Sentinel::getUser()->inRole('admin')){
            $srvy = DB::table('surveys')->get();
        }else{
            $srvy =  DB::table('surveys')->where('creator_id', '=', $id)->get();
        }
        return view('pages.survey',compact('srvy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $id = Sentinel::getUser()->id;
        $cmts =  DB::table('committee')->where('creator_id', '=', $id)->get();
        return view('pages.createSurvey',compact('cmts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $srvy = new Survey;
        

        $srvy->survey_title = $request->title;
        $srvy->description = $request->descrip;
        $srvy->commity_id = $request->commity_id;
        $srvy->course_code = $request->course_id;
        $srvy->creator_id = Sentinel::getUser()->id;
         $srvy->is_template = $request->is_temp;
        
        $srvy->expired = $request->deadline;
        $srvy->save();


        $id=$srvy->survey_id;
        Session::set('survey_id',$id);
        return redirect()->action('SurveyController@show',[$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $srvy = DB::table('surveys')->where('survey_id', $id)->first();
        $olds = DB::table('questions')->where('survey_id', '=', $id)->get();
        return view('pages.completeSurvey',compact('srvy','olds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sid)
    {
        $id = Sentinel::getUser()->id;
        $cmts =  DB::table('committee')->where('creator_id', '=', $id)->get();
        $srvy = DB::table('surveys')->where('survey_id', $id)->first();
        Session::set('survey_id',$sid);
        return view('pages.editSurvey',compact('srvy','cmts'));
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
        $survey = Survey::findOrFail($id);
        $survey->delete();
        $msg = 'Deleted successfully';
        Session::set('massage',$msg);
        return redirect()->action('SurveyController@index');
    }
}
