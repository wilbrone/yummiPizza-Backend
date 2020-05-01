<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function store(Request $request){
        $newOrder = Order::create($request->all());

        return response()->json($newOrder, 200);
    }
}
