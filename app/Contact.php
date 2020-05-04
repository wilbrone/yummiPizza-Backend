<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $guarded = [];

    public function order()
    {
      return $this->belongsTo(Order::class);
    }
}
