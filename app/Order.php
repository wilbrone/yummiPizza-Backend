<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $primaryKey = 'orderId';

    protected $guarded = [];

    protected $fillable = ['pizzaId', 'quantity'];

    // public function pizzaId() {
    //     return $this->hasOne('App\Pizza', 'pizzaId');
    // }

    public function pizzas()
    {
      return $this->hasMany(Pizza::class);
    }

    public function contact()
    {
      return $this->hasOne(Contact::class);
    }

    // public function getRouteKeyName()
    // {
    //     return $this->primaryKey;
    // }
}
