<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'id' => $this->id,
            'name'=> $this->name,
            'surname' => $this->surname,
            'sex'=>$this->sex,
            'address' => $this->address,
            'national_id' => $this->national_id,
            'phone_number' => $this->phone_number,
            'created_at' => $this->created_at,
        ];
    }
}
