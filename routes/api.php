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
Route::get('pizza/{pizza_id}', 'pizzaController@singlePizza');

// handles post request for creating new order
Route::post('pizza/order/create', 'orderController@store');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
