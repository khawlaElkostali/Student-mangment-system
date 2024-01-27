@extends('layout')
@section('title','add new Enrollment')
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
            <div class="card-body">Enrollments page</div>
            <form action="{{ route('enrollments.store') }}" method="post">
                @csrf
                <label for="enroll_no" >Enrollment Number</label>
                <input type="text" id="enroll_no" class="form-control" name="enroll_no" value="{{  old('enroll_no',$enrollment->enroll_no) }}">

                <label for="batch_id" >Batch</label>
                <select name="batch_id" id="batch_id" class="form-control">
                    <option value="" class="form-control">Please select the batch</option>
                    @foreach ($batches as $batch)
                        <option value="{{ $batch->id  }}" class="form-control">{{  $batch->name  }}</option>
                    @endforeach
                </select>

                <label for="student_id" >Student</label>
                <select name="student_id" id="student_id" class="form-control">
                    <option value="" class="form-control">Please select the student</option>
                    @foreach ($students as $student)
                        <option value="{{ $student->id  }}" class="form-control">{{  $student->name  }}</option>
                    @endforeach
                </select>

                <label for="join_date" >Join Date</label>
                <input type="date" name="join_date" id="join_date" class="form-control" value="{{  old('join_date',$enrollment->join_date) }}">

                <label for="fee" >Fee</label>
                <input type="text" name="fee" id="fee" class="form-control" value="{{  old('fee',$enrollment->fee) }}">



                <input type="submit" value="Add" class="btn btn-success">

            </form>
        </div>
    </div>
@endsection
