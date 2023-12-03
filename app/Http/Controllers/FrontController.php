<?php

namespace App\Http\Controllers;

use App\Models\admin\Course;
use App\Models\admin\Feedback;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front(){
        $courses = Course::all();
        $feedbacks = Feedback::all();
        return view("front.front", compact('courses',"feedbacks"));
    }

    public function course_info($id){

        $course = Course::findOrFail($id);
        return view("front.single-course", compact('course'));
    }
}
