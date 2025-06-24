<?php


namespace App\Http\Controllers;

use App\Models\Terrain;
use App\Http\Requests\StoreTerrainRequest;
use App\Http\Requests\UpdateTerrainRequest;
use Illuminate\Support\Facades\Auth;

class TerrainController extends Controller
{
    public function index()
    {
        // Optionally, eager load owner relationship
        return Terrain::with('owner')->get();
    }

    public function create()
    {
        // Not needed for API, can be left empty or removed
    }

    public function store(StoreTerrainRequest $request)
    {
        $data = $request->validated();
        $data['owner_id'] = Auth::id();
        $terrain = Terrain::create($data);
        return response()->json($terrain, 201);
    }

    public function show(Terrain $terrain)
    {
        // Optionally, load owner relationship
        $terrain->load('owner');
        return $terrain;
    }

    public function edit(Terrain $terrain)
    {
        // Not needed for API, can be left empty or removed
    }

    public function update(UpdateTerrainRequest $request, Terrain $terrain)
    {
        $this->authorize('update', $terrain);
        $terrain->update($request->validated());
        return response()->json($terrain);
    }

    public function destroy(Terrain $terrain)
    {
        $this->authorize('delete', $terrain);
        $terrain->delete();
        return response()->json(['message' => 'Deleted']);
    }
}