<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Survey;
use App\SurveyCommittee;
use Sentinel;
use Session;


class AdminController extends Controller
{
    public function showSurvey(){

        $srvy = DB::table('surveys')->get();
        
        return view('pages.admin.surveyAdmin',compact('srvy'));
    }
    public function destroySurvey($id){

        Survey::destroy($id);
        $msg = 'Deleted successfully';
        return dd($msg);
    }
    public function committee()
    {
        $id = Sentinel::getUser()->id;
         if(Sentinel::getUser()->inRole('admin')){
            $cmtes = DB::table('committee')->get();
        }else{
            $cmtes =  DB::table('committee')->where('head_id', '=', $id)->get();
        }
        return view('pages.head.committee',compact('cmtes'));
    }
    public function destroyCommittee($id){
        SurveyCommittee::destroy($id);
        $msg = 'Deleted successfully';
        Session::set('massage',$msg);
        return redirect()->action('AdminController@committee');
    }
}
