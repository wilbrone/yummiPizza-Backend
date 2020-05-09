<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function order()
    {
      return $this->hasMany(OrderItem::class);
    }
}
