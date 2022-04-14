<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmitRequest extends FormRequest
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
            'name' => 'required|min:3|max:30',
            'surname' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users|min:14',
            'password' => 'required|min:8|max:30'
        ];
    }

    public function messages(){

      return[  
        'name.required' => 'Ismingizni kiritmadingiz...',
        'name.min' => '3 ta simboldan kam kiritmang...',
        'name.max' => '30 ta dan ko\'p simbol kiritmang...',
        'surname.required' => 'Familiyangizni kiritmadingiz..',
        'surname.min' => '3 ta simboldan kam kiritmang...',
        'surname.max' => '30 ta dan ko\'p simbol kiritmang...',
        'email.required' => 'Email kiritmadingiz...',
        'email.email' => 'Elektron pochta kiritmadingiz',
        'email.min' => '14 ta dan kam simbol kiritmang...',
        'password.required' => 'Parol kiritmadingiz..',
        'password.min' => '8 ta simboldan kam kiritmang...',
        'password.max' => '30 ta dan  ko\'p simbol kiritmang...',
        'email.unique' => 'Bunday emaildan oldin foydalanilgan'
      ];
    }
}
