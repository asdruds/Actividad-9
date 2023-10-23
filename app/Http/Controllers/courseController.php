<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class courseController extends Controller
{
    public function index(){

        $courses = Course::all(); //SQL: SELECT * FROM Courses;
        return view("courses.index", ['courses' => $courses]);
    }

    public function create(){

        return view("courses.create");
    }

    public function store(Request $request){

        $course = new Course;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->language = $request->language;
        $course->difficulty = $request->difficulty;
        $course->instructor = $request->instructor;
        $course->email = $request->email;
        $course->email_verified_at = $request->email_verified_at;

        $course->save(); //SQL: INSERT INTO courses (...) VALUES (...);
        return redirect()->route('courses.index');
        
    }
    
    public function show($course, $category){

        return view("courses.show", ["course" => $course], ["category" => $category]);
    }

}