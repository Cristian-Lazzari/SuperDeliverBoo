<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Support\Facades\Route;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('/restaurants', [RestaurantController::class, 'index']);
//Route::get('/restaurants/{restaurant}/dishes', [RestaurantController::class, 'getDishes']);
//Route::get('/restaurants/{slug}', [RestaurantController::class, 'show']);

Route::get('categories/', [CategoryController::class, 'index']);
Route::get('restaurants/', [RestaurantController::class, 'index']);
Route::get('restaurants/{id}', [RestaurantController::class, 'show'])->name('api.restaurants.show');
Route::post('orders/', [OrderController::class, 'store'])->name('api.orders.store');

// Route::get('/orders/generate', [OrderController::class, 'generate']);
//Route::post('/payment', [OrderController::class, 'getInfoCustomer']);