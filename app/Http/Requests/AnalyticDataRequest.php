<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalyticDataRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'user_id' => ['required', 'integer'],
            'session_id' => ['required'],
            'analytic_type' => ['required'],
            'page' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
