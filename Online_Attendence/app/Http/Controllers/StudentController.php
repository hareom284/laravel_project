<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Course;

use App\Student;

use App\User;

use App\Attendance;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $students = Student::all();
        $user = User::all();
        $course = Course::all();
        $attendance = Attendance::all();
        return view('student.index',compact('students','user','course','attendance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $course = Course::all();
        return view('student.create',compact("course"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "photo" => "required", 
            "name" => "required|min:5",
            "email"=>'email:rfc,dns',
            "password"=>"required",
            "roll_no"=>"required",
            "phone"=>"required",
            "address"=>"required",

        ]);

        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('student_img', $fileName, 'public');

            $path = '/storage/'.$filePath;

            

        }
        //save to user table

        $user = new User;

        $user->name =  $request->name;
        $user->email = $request->email;

        $user->password = Hash::make($request->password);
        
        $user->save();

        $user->assignRole('student');

        $student = new Student;

        $student->user_id = $user->id;

        $student->course_id = $request->course_name;

        $student->roll_no = $request->roll_no;

        $student->gender = $request->gender;

        $student->phone_no = $request->phone;

        $student->profile = $path;

        $student->address = $request->address;


        $student->save();

        $attendance =new Attendance;

        $attendance->count = 0;
        $attendance->course_id = $request->course_name;
        $attendance->student_id = $student->id;

        $attendance->save();

        return redirect()->route('login');

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
