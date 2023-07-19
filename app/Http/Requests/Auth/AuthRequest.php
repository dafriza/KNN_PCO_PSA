<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => ['required', 'min:8', 'string'],
            'password' => ['required', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username harus diisi',
            'username.min:8' => 'Username minimal 8',
            'username.string' => 'Username harus berupa karakter',
            'password.required' => 'Password harus diisi',
            'password.min:8' => 'Password minimal 8',
        ];
    }
}
