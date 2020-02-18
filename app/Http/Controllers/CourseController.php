<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        //render a list of a resource.
        $courses = Course::latest()->get();

        return view('courses.index', ['courses' => $courses]);
    }

    public function show(Course $course)
    {
        // Show a single resource.

        return view('courses.show', ['course' => $course]);
    }


    public function create()
    {
        //Shows a view to create a new resource
        return view('courses.create');
    }

    public function store()
    {
        Course::create($this->validateCourse());

        return redirect('/courses');
    }

    public function edit(Course $course)
    {
        //Show a view to edit an existing resource
        return view("/courses.edit", compact('course'));
    }

    public function update(Course $course)
    {
        $course->update($this->validateCourse());

        return redirect('/courses/' . $course->id);
    }

    public function destroy()
    {
        //Delete the resource.

    }

    /**
     * @return array
     */
    public function validateSourse(): array
    {
        return request()->validate([
            'id' => 'required',
            'course_id' => 'required',
            'name' => 'required',
            'ecs' => 'required',
        ]);
    }
}
