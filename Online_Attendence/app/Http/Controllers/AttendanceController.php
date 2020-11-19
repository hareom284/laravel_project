<?php

namespace App\Http\Controllers;



use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\User;

use App\Course;

use App\Teacher;



class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        
        
        $teachers = Teacher::all();
        // dd(Auth::user()->id);
        // $teachers = $teachers->find(Auth::user()->id);
        
        $students = Student::all();
        $courses = Course::all();
        
        
        
        return view('attendance.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        // dd('helo');
        $students = Student::all();

        $teachers = Teacher::all();

        return view('attendance.create',compact('courses','teachers','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $arr=$request->all();//arr
      
       foreach($arr as $k=>$val){
        //    echo "$k<br/>";
            // foreach($val as $k=>$v){
                 $a=null;
                if(is_numeric($k)){
                    // echo $k;
                    $a=Attendance::where('student_id',$k)->firstorFail();
                    dd($a);
                    
                    if($val ==1){
                        $a->count+=1;
                    }else{
                        $a->count+=0;
                    }
                    
                    $a->save();
                    
                   }else{
                    continue;
                   }
                // 
           //. }
          
       }
       die();
       echo "successfully";
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }
    public function attendanceaction( Attendance $Attendance)
    {
        return view('attendance.attendanceaction');
    }
}
