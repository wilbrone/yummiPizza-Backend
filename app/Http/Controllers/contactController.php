<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\ContactResource;
use App\Order;
use Illuminate\Http\Request;
// use Symfony\Component\Console\Input\Input;


class contactController extends Controller
{
    // public function store(Request $request, Order $order)
    // {
    //   $contact = Contact::create(
    //     [
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'apartment' => $request->apartment,
    //         'street' => $request->street,
    //         'order_id' => $request->order_id
    //     ]
    //   );

    //   return new ContactResource($contact);
    // }

    public function store(Request $request, Order $order){

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->apartment = $request->apartment;
        $contact->street = $request->street;
        $contact->order_id = $request->order_id;

        $contact->save();
        return new ContactResource($contact);
    }
}

