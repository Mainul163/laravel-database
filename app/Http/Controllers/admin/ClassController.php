<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $class=DB::table('classes')->orderBy('teacher_roll','asc')->get();

    // ********* primary key foreign key ****************

       $class=DB::table('classes')->join('students','classes.students_id','students.id')->get();
     
       return view ('admin.class.class')->with(compact('class'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ts=DB::table('students')->get();
        return view ('admin.class.create')->with(compact('ts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            // 'name' => 'required|unique:students',
            // table name is students
            'teacher_roll'=>'required' ,
            'email'=>'required|max:55',
            
           
        ]);

        $data=array(
            "students_id"=>$request->students_id,
            "teacher_roll"=>$request->teacher_roll ,
            "email"=>$request->email,
            

        );
        DB::table('classes')->insert($data);

     return redirect()->back()->with('success','successfully inserted');
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
       
        $class=DB::table('classes')->where('id',$id)->first();

        // or
        // $class=DB::table('classes')->find($id);
        return view ('admin.class.view')->with(compact('class'));
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
      

        $class=DB::table('classes')->where('id',$id)->first();
        $student=DB::table('students')->get();
        return view('admin.class.edit')->with(compact('class','student'));
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
        $request->validate([
            // 'name' => 'required|unique:students',
            // table name is students
            'teacher_roll'=>'required' ,
            'email'=>'required|max:55',
            
           
        ]);
        $data=array(
            "students_id"=>$request->students_id,
            "teacher_roll"=>$request->teacher_roll ,
            "email"=>$request->email,
            

        );
        DB::table('classes')->where('id',$id)->update($data);

     return redirect()->route('class.index')->with('success','successfully updated');
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

     DB::table('classes')->where('id',$id)->delete();
    return redirect()->back()->with('success','successfully deleted');
    }
}