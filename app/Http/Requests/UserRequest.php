<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => 'max: 100|required|email|unique:users',
            'first_name' => 'min: 4|max: 100|required|string',
            'last_name' => 'min: 4|max: 100|required|string',
            'user_name' => 'min: 4|max: 100|required|string|unique:users',
            'password' => 'min:6|required',
            'password_confirmation' =>'required|',
        ];
    }
}