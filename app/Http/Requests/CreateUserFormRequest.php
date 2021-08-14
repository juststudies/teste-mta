<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:32',
            'password' => 'required|min:6'
        ];
    }

    public function messages(){
        return [
            'name.required' => ':attribute é requerido',
            'name.max' => ':attribute tem valor máximo de 255 caracteres',
            'name.min' => ':attribute tem valor mínimo de 3',
            'username.required' => ':attribute é requerido',
            'username.max' => ':attribute tem valor máximo de 32 caracteres',
            'password.required' => ':attribute é requerido',
            'password.min' => ':attribute tem valor mínimo de 6 caracteres'
        ];
    }
}
