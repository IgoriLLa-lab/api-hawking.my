<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ComparisonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id' => $this->id,
            'city' => CityResource::make($this->city),
            'area' => AreaResource::make($this->area),
            'Адрес' => StreetResource::make($this->street),
            'Цена' => $this->price,
            'Продавец' => SellerResource::make($this->seller),
            'Картинки'=>ImageResource::collection($this->image),
            'Характеристики'=>PropertyResource::collection($this->property),
            'Ипотека'=>MortgageResource::collection($this->mortgage),
            'Описание'=> $this->description,
        ];
    }
}
