<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    protected $fillable = ['orderNumber','totalCost'];


    public function pizzas()
    {
      return $this->hasMany(Pizza::class);
    }

    public function contact()
    {
      return $this->hasOne(Contact::class);
    }

    public function orderItem()
    {
      return $this->hasMany(OrderItem::class);
    }

}
