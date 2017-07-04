<?php
// incomplete
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\School;
use Session;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = DB::table('schools')->get();
        return view('pages.admin.schoolindex',compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $deans = DB::table('users')
            ->join('role_users','role_users.user_id', '=',  'users.id')
            ->where('role_users.role_id', '=', 3)
            ->orWhere('role_users.role_id', '=', 2)
            ->get();
        return view('pages.admin.createSchools',compact('deans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school = new School;

        $school->school_name = $request->name;
        $school->dean_id = $request->dean;

        $school->save();
        $msg = 'A new school named "'.$request->name.'" successfully created. ';
        Session::set('massage',$msg);
        return redirect()->action('SchoolController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'showedc';
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
        $school = School::findOrFail($id);
        $school->delete();
        $msg = 'Deleted successfully';
        Session::set('massage',$msg);
        return redirect()->action('SchoolController@index');
    }
}
