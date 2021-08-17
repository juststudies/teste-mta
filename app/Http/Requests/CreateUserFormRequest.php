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
            'name' => 'required|max:255|min:3',
            'username' => 'required|max:32',
            'password' => 'required|min:6'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo :attribute é requerido',
            'name.max' => 'O campo :attribute tem valor máximo de 255 caracteres',
            'name.min' => 'O campo :attribute tem valor mínimo de 3',
            'username.required' => 'O campo :attribute é requerido',
            'username.max' => 'O campo :attribute tem valor máximo de 32 caracteres',
            'password.required' => 'O campo :attribute é requerido',
            'password.min' => 'O campo :attribute tem valor mínimo de 6 caracteres'
        ];
    }
}
