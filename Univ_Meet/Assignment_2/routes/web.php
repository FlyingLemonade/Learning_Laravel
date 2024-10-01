<?php

use App\Models\Courses;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/course', function (Courses $course) {

    return view('courses', ['course' => $course]);
});

Route::get('/course/{course:id}', function (Courses $course) {

    $course->load(['unit', 'students']);
    return view('welcome', ['course' => $course, 'students' => $course->students()]);
});
