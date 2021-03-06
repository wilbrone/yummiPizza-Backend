<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    protected $fillable = ['pizza_id','quantity','orderNumber','totalCost'];


    public function pizzas()
    {
      return $this->hasMany(Pizza::class);
    }

    public function contact()
    {
      return $this->hasOne(Contact::class);
    }

}
