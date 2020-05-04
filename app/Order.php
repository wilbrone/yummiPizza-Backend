<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // protected $primaryKey = 'orderId';

    protected $guarded = [];

    protected $fillable = ['pizza_id','quantity','orderNumber','totalCost'];

    // public function pizza_id() {
    //     return $this->hasMany('App\Pizza', 'pizza_id');
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
