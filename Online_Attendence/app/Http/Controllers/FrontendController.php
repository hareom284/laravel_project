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
}
