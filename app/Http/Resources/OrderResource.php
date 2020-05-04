<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->orderId,
            'orderNumber' => $this->orderNumber,
            'pizzas' => $this->pizzas,
            'quantity' => $this->quantity,
            'totalCost' => $this->totalCost,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            // 'user' => $this->user,
          ];
    }
}
