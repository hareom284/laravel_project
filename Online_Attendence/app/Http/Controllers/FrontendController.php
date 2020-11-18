<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function teacherdetail()
    {
        // $teacher = Teacher::find($id);
        return view('frontend.teacherdetail');
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
