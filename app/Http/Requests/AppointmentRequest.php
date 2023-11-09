<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'date_time' => ['required', 'date'],
            'hospital_id' => ['required', 'integer'],
            'doctor_id' => ['nullable', 'integer'],
            'customer_id' => ['required', 'integer'],
            'specialisation_id' => ['required', 'integer'],
            'appointment_fee' => ['required', 'numeric'],
            'status' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
