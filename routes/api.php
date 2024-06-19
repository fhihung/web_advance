<?php

use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AccessHistoryController;
use App\Http\Controllers\tbl_ProductController;
use App\Http\Controllers\tbl_brandController;
use App\Http\Controllers\tbl_categoryProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UserController::class);

Route::apiResource('orders', OrderController::class);
Route::apiResource('order-items', OrderItemController::class);
Route::apiResource('foods', FoodController::class);
Route::apiResource('drinks', DrinkController::class);
Route::apiResource('menus', MenuController::class);
Route::apiResource('invoices', InvoiceController::class);
Route::apiResource('payments', PaymentController::class);
Route::apiResource('access-histories', AccessHistoryController::class);
Route::apiResource('products', tbl_ProductController::class);
Route::apiResource('brands', tbl_brandController::class);
Route::apiResource('category-products', tbl_categoryProductController::class);

// Route để lấy giỏ hàng theo user_id
Route::get('carts/user/{user_id}', [CartController::class, 'getCartByUserId']);

//// Route để thêm sản phẩm vào giỏ hàng
Route::post('carts/add', [CartController::class, 'addToCart']);

// Route để get sản phẩm mới nhất
Route::get('new-products', [tbl_ProductController::class, 'getNewProducts']);

// Route để get sản phẩm theo category_id
Route::get('products_by_category_id/{category_id}', [tbl_ProductController::class, 'getProductsByCategoryId']);

// Route để get sản phẩm theo brand_id
Route::get('products_by_brand_id/{brand_id}', [tbl_ProductController::class, 'getProductsByBrandId']);

// Route để lấy wishlist theo user_id
Route::get('wishlists/user/{user_id}', [WishlistController::class, 'getWishlistByUserId']);

// Route để thêm sản phẩm vào wishlist
Route::post('wishlists/add', [WishlistController::class, 'addToWishlist']);
