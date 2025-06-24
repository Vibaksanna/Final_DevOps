<?php


namespace App\Http\Controllers;

use App\Models\Review;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function create()
    {
        //
    }

    public function store(StoreReviewRequest $request)
    {
        $review = Review::create($request->validated());
        return response()->json($review, 201);
    }

    public function show(Review $review)
    {
        return $review;
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->validated());
        return response()->json($review);
    }

    public function destroy(Review $review)
    {
        $review->delete();
        return response()->json(['message' => 'Deleted']);
    }
}