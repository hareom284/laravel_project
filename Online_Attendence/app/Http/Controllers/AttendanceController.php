<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use App\Student;
use App\User;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::all();
        
        return view('attendance.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
        $studentid =$request->studentid;
        $courseid = $request->courseid;
        $tvalue = $request->tvalue;
        $mcount = 0;
        if ($tvalue= "one") {
            $scount=1;
        }else{
            $scount=0;
        }
        $mcount+=$scount;


        $checkattendacne = new Attendacne;
        $checkattendance->count = $mcount;
        $checkattendance->course_id = $courseid;
        $checkattendance->student_id = $studentid;
        $checkattendance->save();


        return 'Successful You Order';
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
