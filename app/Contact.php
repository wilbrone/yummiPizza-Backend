<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $fillable = [
        'name',
        'email',
        'phone',
        'apartment',
        'street',
        'order_id',
    ];

    public function order()
    {
      return $this->belongsTo(Order::class);
    }
}
