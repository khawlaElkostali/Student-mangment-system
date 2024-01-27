@extends('layout')
@section('title','add new teacher')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Teachers page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $teacher->name }}</h5>
                <p class="card-text">Address : {{ $teacher->address }}</p>
                <p class="card-text">Phone : {{ $teacher->phone }}</p>
            </div>


        </div>
    </div>
@endsection
