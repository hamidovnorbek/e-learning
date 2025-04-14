<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Mentor;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', ['courses' => $courses]);
    }
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $comments = $course->comments()
            ->latest('published_at')
            ->paginate(5);

        return view('course.about', [
            'course' => $course,
            'comments' => $comments
        ]);


    }

    public function enroll($slug)
    {
        $course = Course::where('slug', $slug)->first();
        auth()->user()->courses()->attach($course->id);
        return redirect('/courses');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
