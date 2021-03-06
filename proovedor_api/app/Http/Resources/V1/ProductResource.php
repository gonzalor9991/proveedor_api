<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_code' => $this->product_code,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'stock' => $this->stock,
            'image_url' => $this->image_url,
            'is_recommended' => $this->is_recommended,
            'category' =>  CategoryResource::make($this->whenLoaded('category')),
            'brand' =>  BrandResource::make($this->whenLoaded('brand')),
            'tickets' =>  TicketResource::collection($this->whenLoaded('tickets')),
        ];
    }

}
