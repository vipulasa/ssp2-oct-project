<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialisationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
