<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseCommentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Comment;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Support\Facades\Route;


/*      Public Pages    */
Route::get('/', function () {return view('welcome'); });
Route::get('/courses', [CoursesController::class, 'index']);
Route::get('/courses/{slug}', [CoursesController::class, 'show'])->name('courses.show');
Route::middleware('auth')->group( function (){

    /*      Representing the lessons of each courses with enrolling session      */
    Route::post('/courses/{slug}/enroll', [CoursesController::class, 'enroll'])->name('courses.enroll');
    Route::get('/courses/{slug}/lessons', [LessonsController::class, 'index'])->name('lessons.show');

    /*      CourseComments  */
    Route::post('/courses/{course}/comments', [CourseCommentController::class, 'store'])->name('courseComment.store');

    /*     Forum Comments           */
    Route::get('/comment', [CommentController::class, 'index']);
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
});
Route::middleware('guest')->group( function (){
    Route::get('/login', [LoginController::class, 'create']);
    Route::post('/login', [LoginController::class, 'store'])->name('login');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/register', [RegisterController::class, 'create']);
});
Route::delete('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware(['auth']);
