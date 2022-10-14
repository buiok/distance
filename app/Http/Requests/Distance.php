<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Distance extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'geo_lat1' => 'required',
            'geo_lon1' => 'required',
            'geo_lat2' => 'required',
            'geo_lon2' => 'required',
        ];
    }
}
