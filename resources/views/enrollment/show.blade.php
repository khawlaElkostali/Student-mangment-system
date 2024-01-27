@extends('layout')
@section('title','view  enrollment')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Enrollments page</div>
            <div class="card-body">
                <h5 class="card-title">Enroll number : {{ $enrollment->name }}</h5>
                <p class="card-text">Batch : {{ $enrollment->batch->name }}</p>
                <p class="card-text">Student : {{ $enrollment->student->name}}</p>
                <p class="card-text">Join Date : {{ $enrollment->join_date }}</p>
                <p class="card-text">Fee : {{ $enrollment->fee }}</p>
            </div>


        </div>
    </div>
@endsection
