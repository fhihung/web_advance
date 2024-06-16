<?php

namespace App\Http\Controllers;

use App\Models\AccessHistory;
use Illuminate\Http\Request;

class AccessHistoryController extends Controller
{
    public function index()
    {
        return AccessHistory::all();
    }

    public function store(Request $request)
    {
        $accessHistory = AccessHistory::create($request->all());
        return response()->json($accessHistory, 201);
    }

    public function show($id)
    {
        return AccessHistory::find($id);
    }

    public function update(Request $request, $id)
    {
        $accessHistory = AccessHistory::findOrFail($id);
        $accessHistory->update($request->all());
        return response()->json($accessHistory, 200);
    }

    public function destroy($id)
    {
        AccessHistory::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
