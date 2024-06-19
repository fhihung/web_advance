<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function index()
    {
        return Cart::all();
    }

    public function store(Request $request)
    {
        $cart = Cart::create($request->all());
        return response()->json($cart, 201);
    }

    public function show($id)
    {
        return Cart::find($id);
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->update($request->all());
        return response()->json($cart, 200);
    }

    public function destroy($id)
    {
        Cart::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
    public function getCartByUserId($user_id)
    {
        // Truy vấn cơ sở dữ liệu để lấy giỏ hàng theo user_id
        $carts = Cart::where('user_id', $user_id)->get();

        // Trả về danh sách giỏ hàng dưới dạng JSON
        return response()->json($carts, 200);
    }
}
