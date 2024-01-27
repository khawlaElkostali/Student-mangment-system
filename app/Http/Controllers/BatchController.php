<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\BatchRequest;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('batch.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batch = new Batch();
        $courses = Course::all();
        return view('batch.create',compact('courses','batch'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BatchRequest $request)
    {
        $formefields = $request->validated();

        Batch::create($formefields);

        return to_route('batches.index')->with('success','the batch created successfully');    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        return view('batch.show',compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch )
    {
        $courses = Course::all();
        return view('batch.edit',compact('courses','batch'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update( BatchRequest $request, Batch $batch)
    {
        $formefields = $request->validated();

        $batch->update($formefields);

        return to_route('batches.index')->with('success','the batch updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();

        return to_route('batches.index')->with('success','the batch deleted successfully');
    }
}
