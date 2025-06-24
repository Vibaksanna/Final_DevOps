<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        return Booking::all();
    }

    public function create()
    {
        //
    }

    public function store(StoreBookingRequest $request)
    {
        $data = $request->validated();
        $data['renter_id'] = Auth::id();
        $booking = Booking::create($data);
        return response()->json($booking, 201);
    }

    public function show(Booking $booking)
    {
        return $booking;
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());
        return response()->json($booking);
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response()->json(['message' => 'Deleted']);
    }
}