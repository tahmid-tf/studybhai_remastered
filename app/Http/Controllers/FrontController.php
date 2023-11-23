<?php

namespace App\Http\Controllers;

use App\Models\admin\Course;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(){
        $courses = Course::all();
        return view("front.front", compact('courses'));
    }

    public function course_info($id){

        $course = Course::findOrFail($id);
        return view("front.single-course", compact('course'));
    }
}
