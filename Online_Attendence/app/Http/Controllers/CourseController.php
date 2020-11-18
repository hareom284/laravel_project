<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $course = Course::all();
        
        return view('course.index',compact("course"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
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
            "photo" => "required|image|mimes:jpeg,png,jpg,gif,svg", // a.jpg
            "name" => "required|min:5",
            "no_of_times"=>"required",
            "description"=>"required",
        ]);
        

        // if include file, upload
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();

            // brandimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('courseIMG', $fileName, 'public');

            $path = '/storage/'.$filePath;

            
        }
        
        // store
        $course = new Course;
        $course->name = $request->name;
        $course->photo = $path;
        $course->no_of_times = $request->no_of_times;
        $course->description = $request->description;
        $course->save();
        
        // redirect
        return redirect()->route('course.index');
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
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('course.index');
    }
}
