<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    // public function rules(): array
    // {
    //     return [
    //         'email' => 'required',
    //         'name' => 'required|min:3|max:12',
    //         'password' => 'required|min:8',
    //         'password_confirmation' => 'required',
    //     ];
    // }

    // public function messages():array{

    //     return[
    //         'email.required' => 'Devi inserire una mail valida',
    //         'name.required' => 'Devi inserire un nome',
    //         'name.min' => 'Deve essere di almeno 3 caratteri',
    //         'name.max' => 'Deve essere di massimo 12 caratteri',
    //         'password.required' => 'Devi inserire una password',
    //         'password.min' => 'Devi inserire una password di almeno 8 caratteri',
    //         'password_confirmation' => 'Devi inserire una password',
    //     ];
        
    // }
}
