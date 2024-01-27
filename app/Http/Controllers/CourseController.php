<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = new Course();
        return view('course.create',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {
        $formfieldes = $request->validated();

        Course::create($formfieldes);

        return to_route('courses.index')->with('success','the course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('course.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {
        $formfieldes = $request->validated();

        $course->update($formfieldes);

        return to_route('courses.index')->with('success','the course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return to_route('courses.index')->with('success','the course deleted successfully');
    }
}
