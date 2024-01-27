@extends('layout')
@section('title','add new teacher')
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
            <div class="card-body">Teachers page</div>
            <form action="{{ route('teachers.update',$teacher) }}" method="post">
                @method('PUT')
                @csrf
                <label for="name" >Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{  old('name',$teacher->name) }}">
                <label for="address" >Address</label>
                <textarea name="address" id="address" class="form-control">{{  old('address',$teacher->address) }}</textarea>
                <label for="phone" >Phone</label>
                <input type="number" id="phone" class="form-control" name="phone" value="{{  old('phone',$teacher->phone) }}">
                <input type="submit" value="Update" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
