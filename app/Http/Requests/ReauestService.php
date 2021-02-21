<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReauestService extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_service' => ['required', 'string'],
            'price' => ['required', 'decimal'],
            'description' => ['required', 'string']
        ];
    }
}
