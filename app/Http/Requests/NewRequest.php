<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewRequest extends FormRequest
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
            'name' => 'required|min:5',
            'email' => 'required|min:5',
            'text' => 'required|min:20',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please, full your name-form!',
            'name.min' => 'Min. count of symbol is 5!',
            'email.required' => 'Please, full your email-form!',
            'email.min' => 'Min. count of symbol is 5!',
            'text.required' => 'Please, leave your comment. It is very important for us!',
            'text.min' => 'Min. count of symbol is 20!',
        ];
    }
}
