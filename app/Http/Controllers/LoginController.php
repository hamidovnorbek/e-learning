<?php

namespace App\Http\Controllers;

use Cassandra\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

//        dd(Auth::guard('student')->attempt($attributes));
        if(Auth::attempt($attributes)){
            request()->session()->regenerate();
            return redirect('/courses');
        };

        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }

    public function destroy(){

        Auth::logout();

        return redirect('/');
    }
}
