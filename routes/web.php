<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class,'getUser']);
//Route::get('/course', [CourseController::class,'index']);
//Route::get('/course/{id}', [CourseController::class,'findCourse']);
