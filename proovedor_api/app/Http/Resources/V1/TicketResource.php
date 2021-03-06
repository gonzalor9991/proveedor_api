<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'nro_ticket' => $this->nro_ticket,
            'send_to' => $this->send_to,
            'total_price' => $this->total_price,
            'amount' => $this->amount,
            'created' => $this->created_at,
            'updated' => $this->updated_at,
            'products' =>  ProductResource::collection($this->whenLoaded('products')),
            'users' =>  new UserResource($this->whenLoaded('users'))
        ];
    }
}
