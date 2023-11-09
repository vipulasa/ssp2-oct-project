<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Appointment */
class AppointmentResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date_time' => $this->date_time,
            'hospital_id' => $this->hospital_id,
            'doctor_id' => $this->doctor_id,
            'customer_id' => $this->customer_id,
            'specialisation_id' => $this->specialisation_id,
            'appointment_fee' => $this->appointment_fee,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
