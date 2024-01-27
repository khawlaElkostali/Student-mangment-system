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
            <div class="card-body">Courses page</div>
            <form action="{{ route('courses.update',$course) }}" method="post">
                @method('PUT')
                @csrf
                <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{  old('name',$course->name) }}">
                <label for="syllabus" >Syllabus</label>
                <textarea name="syllabus" id="syllabus" class="form-control">{{  old('syllabus',$course->syllabus) }}</textarea>
                <label for="duration" >Duration</label>
                <input type="number" id="duration" class="form-control" name="duration" value="{{  old('duration',$course->duration) }}">
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
