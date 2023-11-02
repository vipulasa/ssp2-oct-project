<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HospitalRequest extends FormRequest
{
    public function rules()
    {
        return [
            'uuid' => ['required'],
            'name' => ['required'],
            'summary' => ['nullable'],
            'address' => ['nullable'],
            'phone' => ['nullable'],
            'email' => ['nullable', 'email', 'max:254'],
            'status' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
