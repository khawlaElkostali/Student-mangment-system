@extends('layout')
@section('title','add new course')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Courses page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $course->name }}</h5>
                <p class="card-text">Address : {{ $course->syllabus }}</p>
                <p class="card-text">Phone : {{ $course->duration }}</p>
            </div>


        </div>
    </div>
@endsection
