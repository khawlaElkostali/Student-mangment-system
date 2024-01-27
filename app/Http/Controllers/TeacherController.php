<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher = new Teacher();
        return view('teacher.create',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        $formfieldes = $request->validated();

        Teacher::create($formfieldes);

        return to_route('teachers.index')->with('success','the teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return view('teacher.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeacherRequest $request, Teacher $teacher)
    {
        $formfieldes = $request->validated();

        $teacher->update($formfieldes);

        return to_route('teachers.index')->with('success','the teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return to_route('teachers.index')->with('success','the teacher deleted successfully');
    }
}
