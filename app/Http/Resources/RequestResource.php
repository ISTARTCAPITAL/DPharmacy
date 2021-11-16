<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RequestResource extends JsonResource
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
            'description' => $this->description,
            'patient_id' => $this->patient_id,
            // 'patient' => new PatientResource($this->patient_id),
            'status' => $this->status,
            'location' => $this->location,
            'created_at' => $this->created_at,
        ];
    }
}
