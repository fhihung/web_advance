<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function store(Request $request)
    {
        $menu = Menu::create($request->all());
        return response()->json($menu, 201);
    }

    public function show($id)
    {
        return Menu::find($id);
    }

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update($request->all());
        return response()->json($menu, 200);
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
