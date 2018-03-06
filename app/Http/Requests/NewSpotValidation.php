<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewSpotValidation extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'max: 100|required|unique:spots',
            'description' => 'max: 1000|required',
            'spotPicture' => 'required',
        ];
    }
}
