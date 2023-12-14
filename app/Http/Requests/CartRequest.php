<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required'],
            'doctor_id' => ['required'],
            'hospital_id' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
