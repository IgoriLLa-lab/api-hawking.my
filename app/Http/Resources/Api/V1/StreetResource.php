<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class StreetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'street_name' => $this->street_name,
            'home_number' => $this->home_number,
            'frame_number' => $this->frame_number,
            'apartment_number' => $this->apartment_number,
        ];
    }
}
