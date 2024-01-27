@extends('layout')
@section('title','add new batch')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Batches page</div>
            <div class="card-body">
                <h5 class="card-title">Name : {{ $batch->name }}</h5>
                <p class="card-text">Start Date : {{ $batch->start_date }}</p>
                <p class="card-text">Course : {{ $batch->course->name }}</p>
            </div>


        </div>
    </div>
@endsection
