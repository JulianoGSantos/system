<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestClient extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required',
            'cpf' => 'nullable',
            'email' => 'required',
            'street' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'city' => 'required',
            'state' => 'required',
            'cep' => 'nullable',
            'cellphone' => 'required',
            'cellphone2' => 'nullable',
        ];
    }
}
