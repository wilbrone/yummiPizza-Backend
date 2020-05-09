<?php

use App\Http\Controllers\pizzaController;
use Illuminate\Http\Request;
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

Route::get('pizza', 'pizzaController@index');
Route::get('pizza/order', 'orderController@index');

// handles post and get requests
Route::get('pizza/{pizza}', 'pizzaController@singlePizza');

// handles post request for creating new order
Route::post('pizza/order/create', 'orderController@store');
// handles updates on the order
Route::put('pizza/order/{order}', 'orderController@update');
// handles deleting an order
Route::delete('pizza/order/{order}', 'orderController@delete');

// handles creating of item orders
Route::post('pizza/order-item/create', 'orderItemController@store');
// handles updating the order item
Route::put('pizza/order-item/{order-item}', 'orderItemController@update');
// handles deleting a specific order item
Route::delete('pizza/order-item/{order-item}', 'orderItemController@delete');

// for adding contacts
Route::post('pizza/contact/create', 'contactController@store');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
