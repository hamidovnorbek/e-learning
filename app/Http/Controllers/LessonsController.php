<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $lessons = $course->lessons()->paginate(1);
        return view('course.show', [
            'lessons' => $lessons
        ]);
    }


    public function show(Lesson $lesson)
    {
        //
    }

}
