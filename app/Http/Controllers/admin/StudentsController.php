<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class StudentsController extends Controller
{
    //auth

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $ts=DB::table('students')->get();
        return view ('admin.students.students')->with(compact('ts'));
        
        
    }

}
 