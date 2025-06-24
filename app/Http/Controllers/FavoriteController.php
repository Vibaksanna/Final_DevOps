<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Http\Requests\StoreFavoriteRequest;
use App\Http\Requests\UpdateFavoriteRequest;

class FavoriteController extends Controller
{
    public function index()
    {
        return Favorite::all();
    }

    public function create()
    {
        //
    }

    public function store(StoreFavoriteRequest $request)
    {
        $favorite = Favorite::create($request->validated());
        return response()->json($favorite, 201);
    }

    public function show(Favorite $favorite)
    {
        return $favorite;
    }

    public function edit(Favorite $favorite)
    {
        //
    }

    public function update(UpdateFavoriteRequest $request, Favorite $favorite)
    {
        $favorite->update($request->validated());
        return response()->json($favorite);
    }

    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
        return response()->json(['message' => 'Deleted']);
    }
}