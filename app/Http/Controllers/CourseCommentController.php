<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseComment;
use Illuminate\Http\Request;

class CourseCommentController extends Controller
{

    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'body' => 'required|string|min:5|max:1000',
        ]);

        CourseComment::create([
            'user_id' => auth()->id(),
            'course_id' => $course->id,
            'content' => $validated['body'],
            'published_at' => now()
        ]);

        return back()->with('success', 'Comment posted!');

    }
}
