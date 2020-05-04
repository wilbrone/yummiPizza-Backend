<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PizzaResource extends JsonResource
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
            'name' => $this->name,
            'size' => $this->size,
            'description' => $this->description,
            'cost' => $this->cost,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
            'order' => $this->order,
          ];
    }
}
