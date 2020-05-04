<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\ContactResource;
use App\Order;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function store(Request $request, Order $order)
    {
      $contact = Contact::create(
        [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'apartment' => $request->apartment,
            'street' => $request->street,
            'order_id' => $request->order_id
        ]
      );

      return new ContactResource($contact);
    }
}

// name
// email
// phone
// apartment
// street
// order_id
