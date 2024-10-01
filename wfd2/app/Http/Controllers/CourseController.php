<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use App\Models\Unit;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function show(Course $course)
    {
        //eager loading 
        $course->load(['unit', 'students']);
        $studentCount = $course->studentCount();
        return view(
            'course',
            [
                'course' => $course,
                'students' => $course->students,
                'studentCount' => $studentCount
            ]
        );
    }


    public function create()
    {
        $units = Unit::all();


        return view('course.create', compact('units'));
    }

    public function insert(Request $request)
    {
        $request->validate(
            [
                'course_code' => 'required|unique:courses|size:6',
                'curriculum_year' => 'required',
                'course_name' => 'required|string|max:255',
                'course_name_en' => 'required|string|max:255',
                'unit_id' => 'required'
            ],
            [
                'course_code.required' => 'Course code wajib diisi',
                'course_code.unique' => 'Course code tidak unik',
                'course_code.size' => 'Size terlalu besar',
                'curriculum_year.required' => 'Wajib diisi',
                'course_name.required' => 'Wajib diisi coursename',
                'course_name_en.required' => 'must be filled',
                'unit_id.required' => 'unit id wajib diisi'
            ],

        );

        $course = new Course;

        $course->course_code = $request->course_code;
        $course->curriculum_year = $request->curriculum_year;
        $course->course_name = $request->course_name;
        $course->course_name_en = $request->course_name_en;
        $course->unit_id = $request->unit_id;

        return redirect('/courses')->with('succcess', 'Input berhasil');
    }
}
