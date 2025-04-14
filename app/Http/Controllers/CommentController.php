<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->where('published_at', '<', now())->take(3)->get();
        return view('about', [
            'comments' => $comments
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'body' => 'required|string|min:5|max:1000',
        ]);

        Comment::create([
            'content' => $validated['body'],
            'user_id' => auth()->id(),
            'published_at' => now()
        ]);

        return back()->with('success', 'Comment posted!');

    }

}
