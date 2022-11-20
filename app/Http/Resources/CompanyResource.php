<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
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
            'id'               => $this->id,
            'name'             => $this->name,
            'address'          => $this->address,
            'contact'          => $this->contact,
            'email'            => $this->email,
            'established_date' => $this->established_date,
            'created_at'       => $this->created_at
        ];
    }
}
