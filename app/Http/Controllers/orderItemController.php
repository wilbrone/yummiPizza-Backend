<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderItemResource;
use App\OrderItem;
use Illuminate\Http\Request;

class orderItemController extends Controller
{
    public function store(Request $request){
        $orderItem = new OrderItem();
        $orderItem->quantity = $request->quantity;
        $orderItem->pizza_id = $request->pizza_id;
        $orderItem->order_id = $request->order_id;
        $orderItem->price = $request->price;

        $orderItem->save();
        return new OrderItemResource($orderItem);
    }

    public function update(Request $request, OrderItem $order_item){

        $order_item->update($request->only(['quantity','price']));

        return new OrderItemResource($order_item);
    }

    public function delete(OrderItem $order_item){

        $order_item->delete();

        return response()->json(null, 204);
    }
}
