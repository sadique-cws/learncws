<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
    $courses=DB::table('courses')->get();
	    return view('students.home')->with(compact('courses'));
    }

    //course_view 
    public function c(Request $req,$course_id){
        $c = DB::table('courses')->find($course_id);
        return view("students.singleCourse")->with(compact('c'));
    }
}
