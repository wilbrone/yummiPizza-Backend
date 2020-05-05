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
        // $data = app('db')->select("
        //         SELECT * FROM orders
        //         JOIN pizzas on orders.pizzaId = pizzas.id");

        // return response()->json($data);

        return OrderResource::collection(Order::with('contact')->paginate(0));
    }

    public function store(Request $request, Pizza $pizza){
        // // $newOrder = Order::create($request->all());
        // $newOrder = new Order;
        // $newOrder->pizzaId = $request->input('pizzaId');
        // $newOrder->orderNumber = Str::random();
        // $newOrder->quantity = $request->input('quantity');
        //
        // // for calculating the total cost
        // $data = Pizza::where('id', '=', $newOrder->pizzaId)->first();

        // $qnt = $data->cost;
        // $untP = $newOrder->quantity;

        // $newOrder->totalCost = $qnt*$untP;


        // $newOrder->save();

        // return response()->json("success!", 200);

        $newOrder = Order::create(
            [
                // 'pizza_id' => $pizza->id,
                'orderNumber' => Str::random(),
                'quantity' => $request->quantity,
                'totalCost' => $request->totalCost,
                'pizza_id' => $request->pizza_id
            ]

            // ['pizza_id' => $pizza->id]
            // ['newOrder' => $request->newOrder],
        );

        return new OrderResource($newOrder);
    }
}


// Data Structure to be sent
// {
//     'pizza_id':[3],
//     'quantity':4,
//     'totalCost':400
// }

