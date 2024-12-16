<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;  // Autorisez toujours pour simplifier
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom est requis.',
            'phone.required' => 'Le téléphone est requis.',
            'email.required' => 'L\'email est requis.',
        ];
    }
}
