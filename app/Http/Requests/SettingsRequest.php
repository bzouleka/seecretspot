<?php

namespace App\Http\Requests;


use Illuminate\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
    public function rules(request $request)
    {

        $validateData = $request->validate([
            'last_name' => 'min:2|max:40',
            'first_name' => 'min:2|max:40',
            'email' => 'email|unique:users',
            'user_name' => 'unique:users',
            'password' => 'min:6',
            'phone' => 'alpha|min:10|max:10',

        ]);

    }


}
