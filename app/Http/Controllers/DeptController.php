<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use App\Dept;
use App\School;
use Session;



class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $depts = DB::table('dept')->get();
        return view('pages.deptTable',['depts' => $depts]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = DB::table('schools')->get();
        $deans = DB::table('users')
            ->join('role_users','role_users.user_id', '=',  'users.id')
            ->where('role_users.role_id', '=', 3)
            ->orWhere('role_users.role_id', '=', 2)
            ->get();
        return view('pages.createdept',compact('schools','deans'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dept = new Dept;
        $id = $request->head_id;
        $dept->full_name = $request->full_name;
        $dept->dept_name = strtoupper($request->dept_name);
        $dept->head_id = $request->head_id;
        $dept->school_id = $request->school;

        $dept->save();

        $user = Sentinel::findById($id);
        $role = Sentinel::findRoleBySlug('head');
        $role->users()->attach($user);

        return redirect('/dept');
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
        $dept = Dept::findOrFail($id);
        $dept->delete();
        $msg = 'Deleted successfully';
        Session::set('massage',$msg);
        return redirect()->action('DeptController@index');
    }
}
