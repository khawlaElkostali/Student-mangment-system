@extends('layout')
@section('title','edit  payment')
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
            <div class="card-body">Payments page</div>
            <form action="{{ route('payments.update',$payment) }}" method="post">
                @csrf
                @method('Put')

                <label for="enrollment_id" >Enrollment No</label>
                <select name="enrollment_id" id="enrollment_id" class="form-control">
                    <option value="" class="form-control">Please select the Enrollment</option>
                    @foreach ($enrollments as $enrollment)
                        <option  value="{{ $enrollment->id  }}" @selected($payment->enrollment_id == $enrollment->id) class="form-control">{{  $enrollment->enroll_no  }}</option>
                    @endforeach
                </select>

                <label for="amount" >Amount</label>
                <input type="text" id="amount" class="form-control" name="amount" value="{{  old('amount',$payment->amount) }}">


                <label for="paid_date" >Paid Date</label>
                <input type="date" name="paid_date" id="paid_date" class="form-control" value="{{  old('paid_date',$payment->paid_date) }}">

                <input type="submit" value="Edit" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
