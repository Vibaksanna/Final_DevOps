<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }

    public function create()
    {
        //
    }

    public function store(StorePaymentRequest $request)
    {
        $payment = Payment::create($request->validated());
        return response()->json($payment, 201);
    }

    public function show(Payment $payment)
    {
        return $payment;
    }

    public function edit(Payment $payment)
    {
        //
    }

    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $payment->update($request->validated());
        return response()->json($payment);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json(['message' => 'Deleted']);
    }
}