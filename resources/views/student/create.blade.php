@extends('layout')
@section('title','add new student')
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
            <div class="card-body">Students page</div>
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{  old('name',$student->name) }}">
                <label for="address" >Address</label>
                <textarea name="address" id="address" class="form-control">{{  old('address',$student->address) }}</textarea>
                <label for="phone" >Phone</label>
                <input type="number" id="phone" class="form-control" name="phone" value="{{  old('phone',$student->phone) }}">
                <input type="submit" value="Add" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
