<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payment = new Payment();
        $enrollments = Enrollment::all();
        return view('payment.create',compact('payment','enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequest $request)
    {
        $formefields = $request->validated();

        Payment::create($formefields);

        return to_route('payments.index')->with('success','the payment created successfully');    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('payment.show',compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment )
    {
        $enrollments = Enrollment::all();
        return view('payment.edit',compact('payment','enrollments'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequest $request, Payment $payment)
    {
        $formefields = $request->validated();

        $payment->update($formefields);

        return to_route('payments.index')->with('success','the payment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();

        return to_route('payments.index')->with('success','the payment deleted successfully');
    }
}
