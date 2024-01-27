@extends('layout')
@section('title','view   Payment')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-body">Payments page</div>
            <div class="card-body">
                <h5 class="card-title">Enrollment No  : {{ $payment->enrollment->enroll_no }}</h5>
                <p class="card-text">Paid Date : {{ $payment->paid_date }}</p>
                <p class="card-text">Amount : {{ $payment->amount }}</p>
            </div>


        </div>
    </div>
@endsection
