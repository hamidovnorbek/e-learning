<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{slug}', [CoursesController::class, 'show'])->middleware('auth')->name('courses.show');



Route::middleware('guest')->group( function (){
    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store'])->name('login');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/register', [RegisterController::class, 'create']);
});


Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware(['auth']);
