<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Order;
use App\Pizza;

class orderController extends Controller
{

    public function index(){
        return OrderResource::collection(Order::with('contact')->paginate(0));
    }

    public function store(Request $request){
        $newOrder = new Order;
        $newOrder->orderNumber = Str::random();
        $newOrder->totalCost = $request->input('totalCost');

        $newOrder->save();

        return new OrderResource($newOrder);
    }
}

