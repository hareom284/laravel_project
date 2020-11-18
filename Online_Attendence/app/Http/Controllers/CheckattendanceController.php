<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Course;
use App\Attendacne;


class CheckattendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('checkattendance.index',compact('students','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        // // dd($request);
        // $studentid =$request->studentid;
        // $courseid = $request->courseid;
        // $tvalue = $request->tvalue;
        // $mcount = 0;
        // if ($tvalue= "one") {
        //     $scount=1;
        // }else{
        //     $scount=0;
        // }
        // $mcount+=$scount;


        // $attendacne = new Attendacne;
        // $attendance->count = $mcount;
        // $attendance->course_id = $courseid;
        // $attendance->student_id = $studentid;
        // $attendance->save();


        // return 'Successful You Order';
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('checkattendance.show');
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
        //
    }
}
