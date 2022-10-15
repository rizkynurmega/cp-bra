<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePropertiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'properties' => ['required'],
            'type' => ['required'],
            'location' => ['required'],
            'image' => ['required'],
            'properties_description' => ['required'],
            'price' => ['required'],
            'notelp' => ['required']
        ];
    }
}