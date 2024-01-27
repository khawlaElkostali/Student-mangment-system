@extends('layout')
@section('title','add new student')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Students page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $student->name }}</h5>
                <p class="card-text">Address : {{ $student->address }}</p>
                <p class="card-text">Phone : {{ $student->phone }}</p>
            </div>


        </div>
    </div>
@endsection
