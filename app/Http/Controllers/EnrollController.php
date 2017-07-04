<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Enrolled;
use Session;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
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
        $id=null;
        if(Session::get('course_id')){
            $id=Session::get('course_id');
            Session::set('course_id',null);
        }else{
            Session::set('massage','OPPS!! Something went wrong');
            return redirect()->action('CoursesController@index');
        }
        $course = DB::table('courses')->where('id', $id)->first();
        
        $enroll = new Enrolled;

        $enroll->course_id=$course->course_id;
        $enroll->user_id=$request->id;
        $enroll->dept=$course->dept_name;
        $enroll->session=$request->session;
        $enroll->save();
        Session::set('massage','SUCCESS!! New Student Enrolled Successfully');
        return redirect()->action('EnrollController@show',['id'=>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $course = DB::table('courses')->where('id', $id)->first();
        //return dd($dept);
        $stnts = DB::table('users')
            ->join('role_users','role_users.user_id', '=',  'users.id')
            ->where('users.dept', '=', $course->dept_name)
            ->Where('role_users.role_id', '=', 1)
            ->get();

            Session::set('course_id',$course->id);
            
            return view('pages.admin.createEnroll',compact('stnts','course'));
           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit';
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
