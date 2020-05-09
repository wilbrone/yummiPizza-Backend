<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';


    protected $fillable = [
        'name',
        'email',
        'phone',
        'apartment',
        'street',
        'order_id',
    ];

    public function pizza()
    {
      return $this->belongsTo(Pizza::class);
    }

    public function order()
    {
      return $this->belongsTo(Order::class);
    }
}
