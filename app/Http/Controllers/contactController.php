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
          'orderId' => $order->id,
        ],
        ['contact' => $request->contact]
      );

      return new ContactResource($contact);
    }
}
