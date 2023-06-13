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

    // get data from database

    public function index(){

        $ts=DB::table('students')->get();
        return view ('admin.students.students')->with(compact('ts'));
        
        
    }


    public function create(){

        return view('admin.create.create');
    }

 // post data to database


 public function store(Request $request){

    $request->validate([
        'name' => 'required|unique:students',
        // table name is students
        'roll'=>'required' ,
        'email'=>'required|max:55',
        
       
    ]);
     
    $data=array(
        'name'=>$request->name,
        'roll'=>$request->roll,
        'email'=>$request->email
    );
   
     DB::table('students')->insert($data);

     return redirect()->back()->with('success','successfully inserted');
 }

  // delete data to database


  public function delete($id){


    DB::table('students')->where('id',$id)->delete();
    return redirect()->back()->with('success','successfully deleted');
  }
  
 // update data to database


public function edit($id){
return view('admin.edit.edit')->with(compact('id'));

}


public function editData(Request $request,$id){
    $request->validate([
        'name' => 'required',
        
    ]);

   
     $data=array('name'=>$request->name);

     DB::table('students')->where('id',$id)->update($data);
     return redirect()->back()->with('success','update successfully');
    
    }
    

}
 