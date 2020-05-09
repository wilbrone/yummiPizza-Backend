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
            'id' => $this->id,
            'orderNumber' => $this->orderNumber,
            'totalCost' => $this->totalCost,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'orderItem' => $this->orderItem,
            'contact' => $this->contact,
          ];
    }
}
