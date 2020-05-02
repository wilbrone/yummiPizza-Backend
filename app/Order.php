<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'orderId';
    protected $guarded = [];

    public function pizzaId() {
        return $this->hasOne('App\Pizza', 'pizzaId');
    }

    public function getRouteKeyName()
    {
        return $this->primaryKey;
    }
}
