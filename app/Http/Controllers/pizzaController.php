<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Pizza;

class pizzaController extends Controller
{
    public function index(){

        return Pizza::all();
    }

    public function order(){

        return Order::all();
    }

    public function singlePizza(Pizza $pizza_id){
        return $pizza_id;
    }
}
