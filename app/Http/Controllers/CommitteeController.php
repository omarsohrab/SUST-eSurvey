<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\SurveyCommittee;

use Sentinel;
use Session;

class CommitteeController extends Controller
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
            $cmtes = DB::table('committee')->get();
        }elseif(Sentinel::getUser()->inRole('head')){
            $cmtes =  DB::table('committee')->where('head_id', '=', $id)->get();
        }elseif(Sentinel::getUser()->inRole('teacher')){
            $cmtes =  DB::table('committee')->where('creator_id', '=', $id)->get();
        }
        return view('pages.head.committee',compact('cmtes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept = Sentinel::getUser()->dept;
         
        $courses = DB::table('courses')->where('dept_name','=',$dept)->get();
        $faculties = DB::table('users')->where('dept','=',$dept)->get();
        return view('pages.head.createCommittee',compact('courses','faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dept = Sentinel::getUser()->dept;
        $id = Sentinel::getUser()->id;

        $cmty = new SurveyCommittee;

        $cmty->title = $request->title;
        $cmty->dept = $dept;
        $cmty->course_code = $request->course_code;
        $cmty->head_id=$id;
        $cmty->creator_id = $request->creator_id;
        $cmty->member_id = $request->member_id;
        $cmty->save();

        Session::set('massage','New survey committee has benn created successfully');
        return redirect()->action('CommitteeController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
