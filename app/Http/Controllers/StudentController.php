<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = new Student();
        return view('student.create',compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $formfieldes = $request->validated();

        Student::create($formfieldes);

        return to_route('students.index')->with('success','the student created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $formfieldes = $request->validated();

        $student->update($formfieldes);

        return to_route('students.index')->with('success','the student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return to_route('students.index')->with('success','the student deleted successfully');
    }
}
