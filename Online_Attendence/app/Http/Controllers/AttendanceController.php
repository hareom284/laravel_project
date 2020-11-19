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
        // Auth::user()->id
        // $teachers = $teachers->find(Auth::user()->id);
        
        $students = Student::where('course_id',Auth::user()->teacher->course_id)->get();
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
        $students = Student::where('course_id',Auth::user()->teacher->course_id)->get();

        $teachers = Teacher::all();

        $attendance = Attendance::all();

        return view('attendance.create',compact('courses','teachers','students',"attendance"));
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
      $k = 0;
       foreach($arr as $k=>$val){
        //    echo "$k<br/>";
            // foreach($val as $k=>$v){
                 $a=null;
                if(is_numeric($k)){
                    // echo $k;
                    $a=Attendance::where('student_id',$k)->firstorFail();
                    
                    
                    if($val ==1){
                        $a->count+=1;
                    }else{
                        $a->count+=0;
                    }
                    
                    $a->save();
                    
                   }else{
                    continue;
                   }
                 
           
          
       }
       //no of times 
       $no_of_items =Attendance::where('student_id',$k)->firstorFail();
       
       $product = Course::find($no_of_items->course_id);
       $number = $product->no_of_times;
       --$number;
       $product->no_of_times = $number;

       $product->save();
       return redirect()->route('attendance.index');
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
