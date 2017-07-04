<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dept;
use App\Courses;
use Session;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $courses = DB::table('courses')
        ->orderBy('dept_name', 'asc')
        ->orderBy('lavel', 'asc')
        ->get();
        return view('pages.courseTable',['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depts = DB::table('dept')->orderBy('dept_name', 'asc')->get();
        return view('pages.createCourse',['depts' => $depts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $course = new Courses;

        $course->course_id = $request->course_id;
        $course->course_name = $request->course_name;
        $course->dept_name = $request->dept;
        $course->lavel = $request->lavel;
        

        $course->save();

        $msg = 'New course added successfully';
        Session::set('massage',$msg);
        return redirect()->action('CoursesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
        Courses::destroy($id);
        $msg = 'Deleted successfully';
        Session::set('massage',$msg);
        return redirect()->action('CoursesController@index');
    }
}
