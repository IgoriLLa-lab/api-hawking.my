<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class MortgageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'bank_name' => $this->bank_name,//название банка
            'bank_logo' => $this->bank_logo, //лого банка
            'down_payment' => $this->down_payment, //Первоначальный взнос
            'term' => $this->term,//Срок кредитования
            'rate' => $this->rate,//Ставка
            'sum' => $this->sum,//Кредит
            'payment_month' => $this->payment_month,//Ежемесячный платеж
        ];
    }
}
