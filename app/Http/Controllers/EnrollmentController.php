<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\EnrollmentRequest;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollment.index',compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollment = new Enrollment();
        $batches = Batch::all();
        $students = Student::all();
        return view('enrollment.create',compact('enrollment','batches','students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EnrollmentRequest $request)
    {
        $formefields = $request->validated();

        Enrollment::create($formefields);

        return to_route('enrollments.index')->with('success','the enrollment created successfully');    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        return view('enrollment.show',compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment )
    {
        $batches = Batch::all();
        $students = Student::all();
        return view('enrollment.edit',compact('enrollment','batches','students'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(EnrollmentRequest $request, Enrollment $enrollment)
    {
        $formefields = $request->validated();

        $enrollment->update($formefields);

        return to_route('enrollments.index')->with('success','the enrollment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();

        return to_route('enrollments.index')->with('success','the enrollment deleted successfully');
    }
}
