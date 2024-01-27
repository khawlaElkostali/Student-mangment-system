@extends('layout')
@section('title','add new batch')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>  {{ $error }} </li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <div class="card-header">
            <div class="card-body">Batches page</div>
            <form action="{{ route('batches.store') }}" method="post">
                @csrf
                <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{  old('name',$batch->name) }}">
                <label for="start_date" >Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{  old('start_date',$batch->start_date) }}">
                <label for="course_id" >Course</label>
                <select name="course_id" id="course_id" class="form-control">
                    <option value="" class="form-control">Please select the course</option>
                    @foreach ($courses as $course)
                        <option value="{{ $course->id  }}" class="form-control">{{  $course->name  }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Add" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
