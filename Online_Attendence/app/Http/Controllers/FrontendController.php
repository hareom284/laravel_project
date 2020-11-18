<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Teacher;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $courses =Course::all();
        $teachers = Teacher::all();
        return view('frontend.index',compact('courses','teachers'));

        // return view('frontend.index',compact('teachers'));
    }
     public function teacherdetail($id)
    {
        $teachers = Teacher::find($id);
        return view('frontend.teacherdetail',compact('teachers'));
    }
     public function contact()
    {
        // $teacher = Teacher::find($id);
        return view('frontend.contact');
    }
    public function studentdetail()
    {
        // $teacher = Teacher::find($id);
        return view('frontend.studentdetail');
    }
     public function signin($value='')
    {
        return view('frontend.signinpage');
    }
    public function signup($value='')
    {
        return view('frontend.signuppage');
    }
}
