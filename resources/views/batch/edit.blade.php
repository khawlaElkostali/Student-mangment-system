@extends('layout')
@section('title','add new course')
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
            <form action="{{ route('batches.update',$batch) }}" method="post">
                @csrf
                @method('Put')
                <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{  old('name',$batch->name) }}">
                <label for="start_date" >Start Date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{  old('start_date',$batch->start_date) }}">
                <label for="course_id" >Course</label>
                <select name="course_id" id="course_id" class="form-control">
                    <option value="" class="form-control">Please select the course</option>
                    @foreach ($courses as $course)
                        <option @selected($batch->course_id == $course->id) class="form-control" value="{{ $course->id }}">{{  $course->name  }}</option>
                    @endforeach
                </select>
                <input type="submit" value="Edit" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
