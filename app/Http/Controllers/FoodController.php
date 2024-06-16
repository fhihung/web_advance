<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index()
    {
        return Food::all();
    }

    public function store(Request $request)
    {
        $food= Food::create($request->all());
        return response()->json($food, 201);
    }

    public function show($id)
    {
        return Food::find($id);
    }

    public function update(Request $request, $id)
    {
        $drink = Food::findOrFail($id);
        $drink->update($request->all());
        return response()->json($drink, 200);
    }

    public function destroy($id)
    {
        Food::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}